# availableReaction

**Description** : *Animations associated with a message reaction*

**Layer** : 218

```tl
availableReaction#c077ec01 flags:# inactive:flags.0?true premium:flags.2?true reaction:string title:string static_icon:Document appear_animation:Document select_animation:Document activate_animation:Document effect_animation:Document around_animation:flags.1?Document center_icon:flags.1?Document = AvailableReaction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **inactive** | [`flags.0?true`](type/true) | If not set, the reaction can be added to new messages and enabled in chats |
| **premium** | [`flags.2?true`](type/true) | Whether this reaction can only be used by Telegram Premium users |
| <mark>reaction</mark> | [`string`](type/string) | Reaction emoji |
| <mark>title</mark> | [`string`](type/string) | Reaction description |
| <mark>static_icon</mark> | [`Document`](type/Document) | Static icon for the reaction |
| <mark>appear_animation</mark> | [`Document`](type/Document) | The animated sticker to show when the user opens the reaction dropdown |
| <mark>select_animation</mark> | [`Document`](type/Document) | The animated sticker to show when the user hovers over the reaction |
| <mark>activate_animation</mark> | [`Document`](type/Document) | The animated sticker to show when the reaction is chosen and activated |
| <mark>effect_animation</mark> | [`Document`](type/Document) | The background effect (still an animated sticker) to play under the activate_animation, when the reaction is chosen and activated |
| **around_animation** | [`flags.1?Document`](type/Document) | The animation that plays around the button when you press an existing reaction (played together with center_icon) |
| **center_icon** | [`flags.1?Document`](type/Document) | The animation of the emoji inside the button when you press an existing reaction (played together with around_animation) |

---

## Type

[AvailableReaction](type/AvailableReaction)

---

## Example

```php
$availableReaction = $client->availableReaction(
	inactive : true,
	premium : true,
	reaction : '58ge0x7PK2hoMlIv',
	title : 'U1NpgG8cmhFk9inE',
	static_icon : $client->documentEmpty(
		id : -2252422169594408582,
	),
	appear_animation : $client->documentEmpty(
		id : -1462568401400094611,
	),
	select_animation : $client->documentEmpty(
		id : 4765890574973890943,
	),
	activate_animation : $client->documentEmpty(
		id : 3872892582556430867,
	),
	effect_animation : $client->documentEmpty(
		id : -5923010550772750217,
	),
	around_animation : $client->documentEmpty(
		id : 7285392655394759149,
	),
	center_icon : $client->documentEmpty(
		id : -9193864587285717305,
	),
);
```