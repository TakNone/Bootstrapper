# emojiURL

**Description** : *An HTTP URL which can be used to automatically log in into translation platform and suggest new emoji replacements. The URL will be valid for 30 seconds after generation*

**Layer** : 211

```tl
emojiURL#a575739d url:string = EmojiURL;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>url</mark> | [`string`](type/string) | An HTTP URL which can be used to automatically log in into translation platform and suggest new emoji replacements. The URL will be valid for 30 seconds after generation |

---

## Type

[EmojiURL](type/EmojiURL)

---

## Example

```php
$emojiURL = $client->emojiURL(
	url : 'https://docs.liveproto.dev',
);
```