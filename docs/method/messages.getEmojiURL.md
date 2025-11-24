# messages.getEmojiURL

**Description** : *Returns an HTTP URL which can be used to automatically log in into translation platform and suggest new emoji keywords &raquo;\. The URL will be valid for 30 seconds after generation*

**Layer** : 218

```tl
messages.getEmojiURL#d5b10c26 lang_code:string = EmojiURL;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>lang_code</mark> | [`string`](type/string) | Language code for which the emoji keywords will be suggested |

---

## Result

[EmojiURL](type/EmojiURL)

---

## Example

```php
$emojiURL = $client->messages->getEmojiURL(
	lang_code : 'CBSdIx82zruvPaMp',
);
```