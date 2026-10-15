# urlAuthResultAccepted

**Description** : *Details about an accepted authorization request, for more info click here &raquo;*

**Layer** : 229

```tl
urlAuthResultAccepted#623a8fa0 flags:# url:flags.0?string = UrlAuthResult;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **url** | [`flags.0?string`](type/string) | If present, the URL to open in the external browser (may use a custom scheme for direct switching to another app); if absent, the login succeeded and clients should simply show a confirmation toast. Always set for bot button URL authorization and link URL authorization |

---

## Type

[UrlAuthResult](type/UrlAuthResult)

---

## Example

```php
$urlAuthResult = $client->urlAuthResultAccepted(
	url : 'https://docs.liveproto.dev',
);
```