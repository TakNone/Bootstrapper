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
			reaction : 'cdw4pA6Wk0ErQUJT',
			title : 'sm1cQW4yAhzvqSOo',
			static_icon : $client->documentEmpty(
				id : 5884632260896978859,
			),
			appear_animation : $client->documentEmpty(
				id : -9107433677553159053,
			),
			select_animation : $client->documentEmpty(
				id : 3285272285017527000,
			),
			activate_animation : $client->documentEmpty(
				id : 662485225704745304,
			),
			effect_animation : $client->documentEmpty(
				id : 2363993546701283114,
			),
			around_animation : $client->documentEmpty(
				id : 8116298878539474369,
			),
			center_icon : $client->documentEmpty(
				id : 5074631681883424816,
			),
		),
	),
);
```