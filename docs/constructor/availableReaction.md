# availableReaction

**Description** : *Animations associated with a message reaction*

**Layer** : 216

```tl
availableReaction#c077ec01 flags:# inactive:flags.0?true premium:flags.2?true reaction:string title:string static_icon:Document appear_animation:Document select_animation:Document activate_animation:Document effect_animation:Document around_animation:flags.1?Document center_icon:flags.1?Document = AvailableReaction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
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
	reaction : 'S0AQatVcynqjpH69',
	title : 'qM1tIvXPWyAHLaes',
	static_icon : $client->documentEmpty(
		id : -1394635696188705207,
	),
	appear_animation : $client->documentEmpty(
		id : -3519313474302362704,
	),
	select_animation : $client->documentEmpty(
		id : -1403859003501481832,
	),
	activate_animation : $client->documentEmpty(
		id : 1762884830630354788,
	),
	effect_animation : $client->documentEmpty(
		id : -7345106401914918448,
	),
	around_animation : $client->documentEmpty(
		id : -3299323199904432476,
	),
	center_icon : $client->documentEmpty(
		id : 3955001518751380229,
	),
);
```