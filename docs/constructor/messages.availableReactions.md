# messages.availableReactions

**Description** : *Animations and metadata associated with message reactions &raquo;*

**Layer** : 222

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
	hash : 0,
	reactions : array(
		$client->availableReaction(
			inactive : true,
			premium : true,
			reaction : 'rt1XeUhf8Rb6Myup',
			title : 'UewsCoR0dLiQTHPj',
			static_icon : $client->documentEmpty(
				id : -7641974004531256825,
			),
			appear_animation : $client->documentEmpty(
				id : 757128484483002436,
			),
			select_animation : $client->documentEmpty(
				id : 3037393808704010106,
			),
			activate_animation : $client->documentEmpty(
				id : -2902830668974000647,
			),
			effect_animation : $client->documentEmpty(
				id : -4856305006156926581,
			),
			around_animation : $client->documentEmpty(
				id : 1042935796450855228,
			),
			center_icon : $client->documentEmpty(
				id : -8551207383033362087,
			),
		),
	),
);
```