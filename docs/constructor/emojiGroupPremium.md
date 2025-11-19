# emojiGroupPremium

**Description** : *An emoji category, used to select all Premium\-only stickers \(i\.e\. those with a Premium effect &raquo;\)/Premium\-only custom emojis \(i\.e\. those where the documentAttributeCustomEmoji\.free flag is not set\)*

**Layer** : 218

```tl
emojiGroupPremium#93bcf34 title:string icon_emoji_id:long = EmojiGroup;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>title</mark> | [`string`](type/string) | Category name, i.e. "Animals", "Flags", "Faces" and so on |
| <mark>icon_emoji_id</mark> | [`long`](type/long) | A single custom emoji used as preview for the category |

---

## Type

[EmojiGroup](type/EmojiGroup)

---

## Example

```php
$emojiGroup = $client->emojiGroupPremium(
	title : 'fXbGDnwSWuix7pRk',
	icon_emoji_id : 5617408370177681305,
);
```