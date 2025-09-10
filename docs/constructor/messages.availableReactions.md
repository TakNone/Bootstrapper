# messages.availableReactions

**Description** : *Animations and metadata associated with message reactions &raquo;*

**Layer** : 214

```tl
messages.availableReactions#768e3aad hash:int reactions:Vector<AvailableReaction> = messages.AvailableReactions;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>hash</mark> | [`int`](type/int) | Hash used for caching, for more info click here |
| <mark>reactions</mark> | [`Vector<AvailableReaction>`](type/AvailableReaction) | Animations and metadata associated with message reactions » |

---

## Type

[messages.AvailableReactions](type/messages.AvailableReactions)

---

## Example

```php
$messagesAvailableReactions = $client->messages->availableReactions(
	hash : 27,
	reactions : array(
		$client->availableReaction(
			inactive : true,
			premium : true,
			reaction : 'J451mnj9UQTrpXcO',
			title : 'GwEycTmr058guUP4',
			static_icon : $client->documentEmpty(
				id : 3330669102916424001,
			),
			appear_animation : $client->documentEmpty(
				id : 5857415813940585797,
			),
			select_animation : $client->documentEmpty(
				id : 3638546797313801427,
			),
			activate_animation : $client->documentEmpty(
				id : -3265354518203189562,
			),
			effect_animation : $client->documentEmpty(
				id : -4115128473684732911,
			),
			around_animation : $client->documentEmpty(
				id : -7237574247312234518,
			),
			center_icon : $client->documentEmpty(
				id : 5442354273172799454,
			),
		),
	),
);
```