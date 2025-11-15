# phoneConnectionWebrtc

**Description** : *WebRTC connection parameters*

**Layer** : 216

```tl
phoneConnectionWebrtc#635fe375 flags:# turn:flags.0?true stun:flags.1?true id:long ip:string ipv6:string port:int username:string password:string = PhoneConnection;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **turn** | [`flags.0?true`](type/true) | Whether this is a TURN endpoint |
| **stun** | [`flags.1?true`](type/true) | Whether this is a STUN endpoint |
| <mark>id</mark> | [`long`](type/long) | Endpoint ID |
| <mark>ip</mark> | [`string`](type/string) | IP address |
| <mark>ipv6</mark> | [`string`](type/string) | IPv6 address |
| <mark>port</mark> | [`int`](type/int) | Port |
| <mark>username</mark> | [`string`](type/string) | Username |
| <mark>password</mark> | [`string`](type/string) | Password |

---

## Type

[PhoneConnection](type/PhoneConnection)

---

## Example

```php
$phoneConnection = $client->phoneConnectionWebrtc(
	turn : true,
	stun : true,
	id : 7570759060421699354,
	ip : '127.0.0.1',
	ipv6 : '127.0.0.1',
	port : 45,
	username : 'TakNone',
	password : 'juiALO6z4FfwVhR3',
);
```