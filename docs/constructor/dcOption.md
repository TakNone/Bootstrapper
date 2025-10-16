# dcOption

**Description** : *Data center*

**Layer** : 216

```tl
dcOption#18b7a10d flags:# ipv6:flags.0?true media_only:flags.1?true tcpo_only:flags.2?true cdn:flags.3?true static:flags.4?true this_port_only:flags.5?true id:int ip_address:string port:int secret:flags.10?bytes = DcOption;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **ipv6** | [`flags.0?true`](type/true) | Whether the specified IP is an IPv6 address |
| **media_only** | [`flags.1?true`](type/true) | Whether this DC should only be used to download or upload files |
| **tcpo_only** | [`flags.2?true`](type/true) | Whether this DC only supports connection with transport obfuscation |
| **cdn** | [`flags.3?true`](type/true) | Whether this is a CDN DC |
| **static** | [`flags.4?true`](type/true) | If set, this IP should be used when connecting through a proxy |
| **this_port_only** | [`flags.5?true`](type/true) | If set, clients must connect using only the specified port, without trying any other port |
| <mark>id</mark> | [`int`](type/int) | DC ID |
| <mark>ip_address</mark> | [`string`](type/string) | IP address of DC |
| <mark>port</mark> | [`int`](type/int) | Port |
| **secret** | [`flags.10?bytes`](type/bytes) | If the tcpo_only flag is set, specifies the secret to use when connecting using transport obfuscation |

---

## Type

[DcOption](type/DcOption)

---

## Example

```php
$dcOption = $client->dcOption(
	ipv6 : true,
	media_only : true,
	tcpo_only : true,
	cdn : true,
	static : true,
	this_port_only : true,
	id : 59,
	ip_address : '127.0.0.1',
	port : 8,
	secret : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
);
```