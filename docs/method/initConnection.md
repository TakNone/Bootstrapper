# initConnection

**Description** : *Initialize connection*

**Layer** : 218

```tl
initConnection#c1cd5ea9 {X:Type} flags:# api_id:int device_model:string system_version:string app_version:string system_lang_code:string lang_pack:string lang_code:string proxy:flags.0?InputClientProxy params:flags.1?JSONValue query:!X = X;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
	api_id : 56,
	device_model : 'vf5tBcd2a9skzu3V',
	system_version : 'kba3sRWGZXOgCQwn',
	app_version : 'zipRNldf6rwDvKPa',
	system_lang_code : 'h6bjd9QgiRVCTKeP',
	lang_pack : 'dUMyH1aw975Gb2in',
	lang_code : 'fX9xKAco7il5N6Jd',
	proxy : $client->inputClientProxy(
		address : 'AZiKbShJ4BpD2TOc',
		port : 33,
	),
	params : $client->jsonNull(),
	query : $client->help->getConfig(raw : true),
);
```