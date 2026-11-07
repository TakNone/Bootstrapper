# messages.availableReactions

**Description** : *Animations and metadata associated with message reactions &raquo;*

**Layer** : 233

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
			reaction : 'EpU56nlHRy3W2CKt',
			title : '8bMCQc0sklN6uImp',
			static_icon : $client->documentEmpty(
				id : 1098207682131008373,
			),
			appear_animation : $client->documentEmpty(
				id : 1027779653547533763,
			),
			select_animation : $client->documentEmpty(
				id : 6328030522743511914,
			),
			activate_animation : $client->documentEmpty(
				id : -7185622597921234165,
			),
			effect_animation : $client->documentEmpty(
				id : -4678317189206637497,
			),
			around_animation : $client->documentEmpty(
				id : 6795747411732023200,
			),
			center_icon : $client->documentEmpty(
				id : -6247852858283628960,
			),
		),
	),
);
```