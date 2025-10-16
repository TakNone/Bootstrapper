# messages.availableReactions

**Description** : *Animations and metadata associated with message reactions &raquo;*

**Layer** : 216

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
			reaction : '46hbLMqtIkdWRrDP',
			title : 'FOfZCBjTtdPoYbRy',
			static_icon : $client->documentEmpty(
				id : -5331674385150816845,
			),
			appear_animation : $client->documentEmpty(
				id : -4063897828797823007,
			),
			select_animation : $client->documentEmpty(
				id : 1951116715240363092,
			),
			activate_animation : $client->documentEmpty(
				id : -1154882824723907873,
			),
			effect_animation : $client->documentEmpty(
				id : -3784706828759458982,
			),
			around_animation : $client->documentEmpty(
				id : -2926801520757761013,
			),
			center_icon : $client->documentEmpty(
				id : 7233476016444091393,
			),
		),
	),
);
```