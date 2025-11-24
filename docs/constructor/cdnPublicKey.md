# cdnPublicKey

**Description** : *Public key to use only during handshakes to CDN DCs*

**Layer** : 218

```tl
cdnPublicKey#c982eaba dc_id:int public_key:string = CdnPublicKey;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>dc_id</mark> | [`int`](type/int) | CDN DC ID |
| <mark>public_key</mark> | [`string`](type/string) | RSA public key |

---

## Type

[CdnPublicKey](type/CdnPublicKey)

---

## Example

```php
$cdnPublicKey = $client->cdnPublicKey(
	dc_id : 60,
	public_key : 'osIVEbnmGNYP854c',
);
```