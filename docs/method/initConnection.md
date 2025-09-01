# initConnection

**Description** : *Initialize connection*

**Layer** : 214

```tl
initConnection#c1cd5ea9 {X:Type} flags:# api_id:int device_model:string system_version:string app_version:string system_lang_code:string lang_pack:string lang_code:string proxy:flags.0?InputClientProxy params:flags.1?JSONValue query:!X = X;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>api_id</mark> | [`int`](type/int) | Application identifier (see. App configuration) |
| <mark>device_model</mark> | [`string`](type/string) | Device model |
| <mark>system_version</mark> | [`string`](type/string) | Operation system version |
| <mark>app_version</mark> | [`string`](type/string) | Application version |
| <mark>system_lang_code</mark> | [`string`](type/string) | Code for the language used on the device's OS, ISO 639-1 standard |
| <mark>lang_pack</mark> | [`string`](type/string) | Platform identifier (i.e. android, tdesktop, etc) |
| <mark>lang_code</mark> | [`string`](type/string) | Either an ISO 639-1 language code or a language pack name obtained from a language pack link |
| **proxy** | [`flags.0?InputClientProxy`](type/InputClientProxy) | Info about an MTProto proxy |
| **params** | [`flags.1?JSONValue`](type/JSONValue) | Additional initConnection parameters. For now, only the tz_offset field is supported, for specifying the timezone offset in seconds |
| <mark>query</mark> | [`!X`](type/X) | The query itself |

---

## Result

[X](type/X)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CONNECTION_LAYER_INVALID** | `400` | Layer invalid |

---

## Example

```php
$x = $client->initConnection(
	api_id : 9,
	device_model : 'jGFC9nA6wzNysPk7',
	system_version : 'KhgJGP283bvZn179',
	app_version : '6Mc4z5QKhisjx0gY',
	system_lang_code : 'ncKTD798xRMGUwPF',
	lang_pack : 'n2Kh4gQHMZjNrcsY',
	lang_code : 'XkxbVm7GLzCUi35d',
	proxy : $client->inputClientProxy(
		address : 'XUFO1lvRJdnWxGBL',
		port : 34,
	),
	params : $client->jsonNull(),
	query : $client->help->getConfig(raw : true),
);
```