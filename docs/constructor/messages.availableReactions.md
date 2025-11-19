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
			reaction : 'GWqTwFMohBZrtY4a',
			title : 'enpywricm1sLzvdk',
			static_icon : $client->documentEmpty(
				id : -8354181585053295460,
			),
			appear_animation : $client->documentEmpty(
				id : 4673775615507317067,
			),
			select_animation : $client->documentEmpty(
				id : 8521937608103147521,
			),
			activate_animation : $client->documentEmpty(
				id : 4647226515484707716,
			),
			effect_animation : $client->documentEmpty(
				id : -2317280307372111062,
			),
			around_animation : $client->documentEmpty(
				id : 9063349311618146594,
			),
			center_icon : $client->documentEmpty(
				id : -8865397701869967024,
			),
		),
	),
);
```