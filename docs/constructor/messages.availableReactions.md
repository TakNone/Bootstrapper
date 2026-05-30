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
			reaction : 'Zt0fynhOM83uBEIK',
			title : 'f4dwLNXuhVSpmyTU',
			static_icon : $client->documentEmpty(
				id : -3122610206727037629,
			),
			appear_animation : $client->documentEmpty(
				id : 7268320111727205801,
			),
			select_animation : $client->documentEmpty(
				id : -7700782806989820380,
			),
			activate_animation : $client->documentEmpty(
				id : 1191008551509012828,
			),
			effect_animation : $client->documentEmpty(
				id : 6763653205703158869,
			),
			around_animation : $client->documentEmpty(
				id : 647647307051227632,
			),
			center_icon : $client->documentEmpty(
				id : -4482983792000376261,
			),
		),
	),
);
```