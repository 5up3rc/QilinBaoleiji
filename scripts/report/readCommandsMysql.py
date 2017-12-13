#!/usr/bin/python
import mysql.connector
from subprocess import PIPE,Popen,call 

audit_ip = Popen("cat /etc/sysconfig/network-scripts/ifcfg-eth0 | grep IPADDR | cut -d '=' -f2", shell=True, stdout=PIPE).stdout.readline().rstrip()

print audit_ip

cnx = mysql.connector.connect(user='freesvr', password='freesvr',
                              host='127.0.0.1',
                              database='audit_sec')
cursor = cnx.cursor()

query =  "select commands.at, sessions.cli_addr,sessions.addr, sessions.type, sessions.luser, sessions.user , commands.cmd from commands left join sessions on commands.sid = sessions.sid where commands.at > now() - interval 1 day"
cursor.execute(query)
with open("/opt/freesvr/audit/log/command.log","w") as o:
    for (time, sip, dip, protocol, audit_user, remote_user, command) in cursor:
        o.write(" (time: " + time.strftime("%b %d %Y %H:%M:%S") + ") (source ip: " + sip + 
        ") (audit ip: " + audit_ip + ") (server ip: " + dip + 
        ") (login protocol: " + protocol + ") (audit username: " + audit_user + 
        ") (system username:" + remote_user + " ) (command:" + command + " )")
        print time, sip, dip, protocol, audit_user, remote_user, command
o.close()
cursor.close()