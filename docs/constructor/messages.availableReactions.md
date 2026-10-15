# messages.availableReactions

**Description** : *Animations and metadata associated with message reactions &raquo;*

**Layer** : 229

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
			reaction : 'FybvGWBDHU1QudtN',
			title : 'RNxQ1DTmvaOdAYJ9',
			static_icon : $client->documentEmpty(
				id : 4230894737629457113,
			),
			appear_animation : $client->documentEmpty(
				id : -4630387721518970644,
			),
			select_animation : $client->documentEmpty(
				id : 2029604320130833232,
			),
			activate_animation : $client->documentEmpty(
				id : 8844758212411615629,
			),
			effect_animation : $client->documentEmpty(
				id : 3077593787615304343,
			),
			around_animation : $client->documentEmpty(
				id : -5593424461747589835,
			),
			center_icon : $client->documentEmpty(
				id : -4305438031863849818,
			),
		),
	),
);
```