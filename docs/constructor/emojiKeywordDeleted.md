# emojiKeywordDeleted

**Description** : *Deleted emoji keyword*

**Layer** : 227

```tl
emojiKeywordDeleted#236df622 keyword:string emoticons:Vector<string> = EmojiKeyword;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>keyword</mark> | [`string`](type/string) | Keyword |
| <mark>emoticons</mark> | [`Vector<string>`](type/string) | Emojis that were associated to keyword |

---

## Type

[EmojiKeyword](type/EmojiKeyword)

---

## Example

```php
$emojiKeyword = $client->emojiKeywordDeleted(
	keyword : '2nVfhsQq9vwPXRrW',
	emoticons : array('s2v9XHI3PLVmjOo7'),
);
```