# emojiGroup

**Description** : *Represents an emoji category*

**Layer** : 214

```tl
emojiGroup#7a9abda9 title:string icon_emoji_id:long emoticons:Vector<string> = EmojiGroup;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>title</mark> | [`string`](type/string) | Category name, i.e. "Animals", "Flags", "Faces" and so on |
| <mark>icon_emoji_id</mark> | [`long`](type/long) | A single custom emoji used as preview for the category |
| <mark>emoticons</mark> | [`Vector<string>`](type/string) | A list of UTF-8 emojis, matching the category |

---

## Type

[EmojiGroup](type/EmojiGroup)

---

## Example

```php
$emojiGroup = $client->emojiGroup(
	title : 'fmXEdZyiLJvn0ghs',
	icon_emoji_id : 1184607158267970006,
	emoticons : array('Dq5F7UmwORGjMspC'),
);
```