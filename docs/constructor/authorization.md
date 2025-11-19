# authorization

**Description** : *Logged\-in session*

**Layer** : 218

```tl
authorization#ad01d61d flags:# current:flags.0?true official_app:flags.1?true password_pending:flags.2?true encrypted_requests_disabled:flags.3?true call_requests_disabled:flags.4?true unconfirmed:flags.5?true hash:long device_model:string platform:string system_version:string api_id:int app_name:string app_version:string date_created:int date_active:int ip:string country:string region:string = Authorization;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **current** | [`flags.0?true`](type/true) | Whether this is the current session |
| **official_app** | [`flags.1?true`](type/true) | Whether the session is from an official app |
| **password_pending** | [`flags.2?true`](type/true) | Whether the session is still waiting for a 2FA password |
| **encrypted_requests_disabled** | [`flags.3?true`](type/true) | Whether this session will accept encrypted chats |
| **call_requests_disabled** | [`flags.4?true`](type/true) | Whether this session will accept phone calls |
| **unconfirmed** | [`flags.5?true`](type/true) | Whether the session is unconfirmed, see here » for more info |
| <mark>hash</mark> | [`long`](type/long) | Identifier |
| <mark>device_model</mark> | [`string`](type/string) | Device model |
| <mark>platform</mark> | [`string`](type/string) | Platform |
| <mark>system_version</mark> | [`string`](type/string) | System version |
| <mark>api_id</mark> | [`int`](type/int) | API ID |
| <mark>app_name</mark> | [`string`](type/string) | App name |
| <mark>app_version</mark> | [`string`](type/string) | App version |
| <mark>date_created</mark> | [`int`](type/int) | When was the session created |
| <mark>date_active</mark> | [`int`](type/int) | When was the session last active |
| <mark>ip</mark> | [`string`](type/string) | Last known IP |
| <mark>country</mark> | [`string`](type/string) | Country determined from IP |
| <mark>region</mark> | [`string`](type/string) | Region determined from IP |

---

## Type

[Authorization](type/Authorization)

---

## Example

```php
$authorization = $client->authorization(
	current : true,
	official_app : true,
	password_pending : true,
	encrypted_requests_disabled : true,
	call_requests_disabled : true,
	unconfirmed : true,
	hash : 0,
	device_model : 'pSOyFq5WKtM4X9ZT',
	platform : 'nlUHSWcpB15XvbjF',
	system_version : '5sFq2rX3QJK9GWiV',
	api_id : 46,
	app_name : 'nhqMZlJj3ysB4mc9',
	app_version : 'gWYkRtIZxSrvT7j0',
	date_created : 37,
	date_active : 84,
	ip : '127.0.0.1',
	country : 'jksBVL03OZ4zMpa7',
	region : 'vMfz9tXkHoUIp267',
);
```