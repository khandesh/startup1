
; <<>> DiG 9.3.6-P1-RedHat-9.3.6-20.P1.el5_8.6 <<>> @192.43.172.30 achevend.com
; (1 server found)
;; global options:  printcmd
;; Got answer:
;; ->>HEADER<<- opcode: QUERY, status: NOERROR, id: 18965
;; flags: qr rd; QUERY: 1, ANSWER: 0, AUTHORITY: 2, ADDITIONAL: 2

;; QUESTION SECTION:
;achevend.com.			IN	A

;; AUTHORITY SECTION:
achevend.com.		172800	IN	NS	dns1.outpowerhosting.com.
achevend.com.		172800	IN	NS	dns2.outpowerhosting.com.

;; ADDITIONAL SECTION:
dns1.outpowerhosting.com. 172800 IN	A	173.199.155.60
dns2.outpowerhosting.com. 172800 IN	A	173.199.155.61

;; Query time: 100 msec
;; SERVER: 192.43.172.30#53(192.43.172.30)
;; WHEN: Mon Feb 25 01:56:02 2013
;; MSG SIZE  rcvd: 116

