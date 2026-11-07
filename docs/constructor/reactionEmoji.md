# reactionEmoji

**Description** : *Normal emoji message reaction*

**Layer** : 229

```tl
reactionEmoji#1b2286b8 emoticon:string = Reaction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>emoticon</mark> | [`string`](type/string) | Emoji |

---

## Type

[Reaction](type/Reaction)

---

## Example

```php
$reaction = $client->reactionEmoji(
	emoticon : '3zRgHXu04cYf1y8m',
);
```