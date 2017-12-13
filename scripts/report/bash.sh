#!/bin/bash
grep 'login protocol'  /opt/freesvr/audit/authd/log/freesvr-authd.log >> /opt/freesvr/audit/log/bljlogin.log
echo > /opt/freesvr/audit/authd/log/freesvr-authd.log
