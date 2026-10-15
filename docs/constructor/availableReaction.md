# availableReaction

**Description** : *Animations associated with a message reaction*

**Layer** : 229

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
	reaction : 'xrl6nK8P4SLAubVg',
	title : 'iDMRoKpXu0Qs2bAk',
	static_icon : $client->documentEmpty(
		id : 7323874855398312569,
	),
	appear_animation : $client->documentEmpty(
		id : 207719050389066910,
	),
	select_animation : $client->documentEmpty(
		id : 231798688031378363,
	),
	activate_animation : $client->documentEmpty(
		id : -6509776036617174060,
	),
	effect_animation : $client->documentEmpty(
		id : -3518676080569170434,
	),
	around_animation : $client->documentEmpty(
		id : 7144283971629691788,
	),
	center_icon : $client->documentEmpty(
		id : 5954369828908150742,
	),
);
```