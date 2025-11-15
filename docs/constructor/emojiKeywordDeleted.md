# emojiKeywordDeleted

**Description** : *Deleted emoji keyword*

**Layer** : 218

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
	keyword : 'LvYAKzlh8UdEc4Hy',
	emoticons : array('g09sfMDaovtPb2IC'),
);
```