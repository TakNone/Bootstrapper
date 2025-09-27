# phoneConnection

**Description** : *Identifies an endpoint that can be used to connect to the other user in a phone call*

**Layer** : 216

```tl
phoneConnection#9cc123c7 flags:# tcp:flags.0?true id:long ip:string ipv6:string port:int peer_tag:bytes = PhoneConnection;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **tcp** | [`flags.0?true`](type/true) | Whether TCP should be used |
| <mark>id</mark> | [`long`](type/long) | Endpoint ID |
| <mark>ip</mark> | [`string`](type/string) | IP address of endpoint |
| <mark>ipv6</mark> | [`string`](type/string) | IPv6 address of endpoint |
| <mark>port</mark> | [`int`](type/int) | Port ID |
| <mark>peer_tag</mark> | [`bytes`](type/bytes) | Our peer tag |

---

## Type

[PhoneConnection](type/PhoneConnection)

---

## Example

```php
$phoneConnection = $client->phoneConnection(
	tcp : true,
	id : 2405807071089409089,
	ip : '127.0.0.1',
	ipv6 : '127.0.0.1',
	port : 45,
	peer_tag : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
);
```