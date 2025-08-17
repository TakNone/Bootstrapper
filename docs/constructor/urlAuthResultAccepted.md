# urlAuthResultAccepted

**Description** : *Details about an accepted authorization request, for more info click here »*

**Layer** : 211

```tl
urlAuthResultAccepted#8f8c0e4e url:string = UrlAuthResult;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>url</mark> | [`string`](type/string) | The URL name of the website on which the user has logged in |

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