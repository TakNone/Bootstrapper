# cdnConfig

**Description** : *Configuration for CDN file downloads*

**Layer** : 214

```tl
cdnConfig#5725e40a public_keys:Vector<CdnPublicKey> = CdnConfig;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>public_keys</mark> | [`Vector<CdnPublicKey>`](type/CdnPublicKey) | Vector of public keys to use only during handshakes to CDN DCs |

---

## Type

[CdnConfig](type/CdnConfig)

---

## Example

```php
$cdnConfig = $client->cdnConfig(
	public_keys : array(
		$client->cdnPublicKey(
			dc_id : 35,
			public_key : 'zsZqAorCf6PVIWxS',
		),
	),
);
```