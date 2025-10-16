# initConnection

**Description** : *Initialize connection*

**Layer** : 216

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
	api_id : 22,
	device_model : 'eVSgs3uKxPNGBDAz',
	system_version : 'EnKUdM4TcRD5Wfs1',
	app_version : 'xNY4CzDFcTUk2ZM5',
	system_lang_code : 'fWyRTmD4qzFvQ3wK',
	lang_pack : '1FjGNCKrPYq7aiSx',
	lang_code : 'IKPrXT4gdLU7tf38',
	proxy : $client->inputClientProxy(
		address : 'qDZwyCkErpWAuTP2',
		port : 80,
	),
	params : $client->jsonNull(),
	query : $client->help->getConfig(raw : true),
);
```