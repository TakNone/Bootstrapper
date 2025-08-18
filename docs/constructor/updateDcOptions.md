# updateDcOptions

**Description** : *Changes in the data center configuration options*

**Layer** : 211

```tl
updateDcOptions#8e5e9873 dc_options:Vector<DcOption> = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>dc_options</mark> | [`Vector<DcOption>`](type/DcOption) | New connection options |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateDcOptions(
	dc_options : array(
		$client->dcOption(
			ipv6 : true,
			media_only : true,
			tcpo_only : true,
			cdn : true,
			static : true,
			this_port_only : true,
			id : 13,
			ip_address : '127.0.0.1',
			port : 68,
			secret : '?J?<sLiveProto/?c',
		),
	),
);
```