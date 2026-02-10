# urlAuthResultAccepted

**Description** : *Details about an accepted authorization request, for more info click here &raquo;*

**Layer** : 222

```tl
urlAuthResultAccepted#623a8fa0 flags:# url:flags.0?string = UrlAuthResult;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **url** | [`flags.0?string`](type/string) | The URL name of the website on which the user has logged in |

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