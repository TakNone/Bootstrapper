# messages.availableReactions

**Description** : *Animations and metadata associated with message reactions &raquo;*

**Layer** : 218

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
			reaction : 'ScGvOIHEfP2Jd0D5',
			title : 'yxP9q4dAGcT1YeEC',
			static_icon : $client->documentEmpty(
				id : 6744396153338229711,
			),
			appear_animation : $client->documentEmpty(
				id : 1046799641416748372,
			),
			select_animation : $client->documentEmpty(
				id : 4742559026189381337,
			),
			activate_animation : $client->documentEmpty(
				id : 756124268698875226,
			),
			effect_animation : $client->documentEmpty(
				id : -7398570003535571989,
			),
			around_animation : $client->documentEmpty(
				id : -4668043785454162997,
			),
			center_icon : $client->documentEmpty(
				id : 3213717480242344187,
			),
		),
	),
);
```