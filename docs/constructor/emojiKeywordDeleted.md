# emojiKeywordDeleted

**Description** : *Deleted emoji keyword*

**Layer** : 233

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
	keyword : '3yeoMtvF4RAWSg2Y',
	emoticons : array('eXBubtafEM0HhvdV'),
);
```