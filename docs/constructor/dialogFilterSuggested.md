# dialogFilterSuggested

**Description** : *Suggested folders*

**Layer** : 216

```tl
dialogFilterSuggested#77744d4a filter:DialogFilter description:string = DialogFilterSuggested;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>filter</mark> | [`DialogFilter`](type/DialogFilter) | Folder info |
| <mark>description</mark> | [`string`](type/string) | Folder description |

---

## Type

[DialogFilterSuggested](type/DialogFilterSuggested)

---

## Example

```php
$dialogFilterSuggested = $client->dialogFilterSuggested(
	filter : $client->dialogFilter(
		contacts : true,
		non_contacts : true,
		groups : true,
		broadcasts : true,
		bots : true,
		exclude_muted : true,
		exclude_read : true,
		exclude_archived : true,
		title_noanimate : true,
		id : 46,
		title : $client->textWithEntities(
			text : 'QwIvyPtGM6bzFWAi',
			entities : array(
				$client->messageEntityUnknown(...),
				$client->messageEntityMention(...),
				$client->messageEntityHashtag(...),
				$client->messageEntityBotCommand(...),
				$client->messageEntityUrl(...),
				$client->messageEntityEmail(...),
				$client->messageEntityBold(...),
				$client->messageEntityItalic(...),
				$client->messageEntityCode(...),
				$client->messageEntityPre(...),
				$client->messageEntityTextUrl(...),
				$client->messageEntityMentionName(...),
				$client->inputMessageEntityMentionName(...),
				$client->messageEntityPhone(...),
				$client->messageEntityCashtag(...),
				$client->messageEntityUnderline(...),
				$client->messageEntityStrike(...),
				$client->messageEntityBankCard(...),
				$client->messageEntitySpoiler(...),
				$client->messageEntityCustomEmoji(...),
				$client->messageEntityBlockquote(...),
			),
		),
		emoticon : '6Ii2jPrTQaXMqnxs',
		color : 13,
		pinned_peers : array(
			$client->inputPeerEmpty(),
			$client->inputPeerSelf(),
			$client->inputPeerChat(
				chat_id : -6459267869506835865,
			),
			$client->inputPeerUser(
				user_id : -6338544463579641417,
				access_hash : -711855667616565931,
			),
			$client->inputPeerChannel(
				channel_id : 985304013292024213,
				access_hash : 1424261625667427585,
			),
			$client->inputPeerUserFromMessage(
				peer : $client->inputPeerEmpty(...),
				msg_id : 81,
				user_id : 1820054745810119261,
			),
			$client->inputPeerChannelFromMessage(
				peer : $client->inputPeerEmpty(...),
				msg_id : 88,
				channel_id : 1450738603307390403,
			),
		),
		include_peers : array(
			$client->inputPeerEmpty(),
			$client->inputPeerSelf(),
			$client->inputPeerChat(
				chat_id : 6355751178302431173,
			),
			$client->inputPeerUser(
				user_id : -7953018998109325629,
				access_hash : 642308394870776397,
			),
			$client->inputPeerChannel(
				channel_id : -8925720631590118890,
				access_hash : 8274653048195787082,
			),
			$client->inputPeerUserFromMessage(
				peer : $client->inputPeerEmpty(...),
				msg_id : 9,
				user_id : -8238408742465385494,
			),
			$client->inputPeerChannelFromMessage(
				peer : $client->inputPeerEmpty(...),
				msg_id : 2,
				channel_id : -1515998762454156783,
			),
		),
		exclude_peers : array(
			$client->inputPeerEmpty(),
			$client->inputPeerSelf(),
			$client->inputPeerChat(
				chat_id : 6377984818733425168,
			),
			$client->inputPeerUser(
				user_id : 7860233134781033145,
				access_hash : 4310259284960337015,
			),
			$client->inputPeerChannel(
				channel_id : 4277173232598214100,
				access_hash : -1465262912259640523,
			),
			$client->inputPeerUserFromMessage(
				peer : $client->inputPeerEmpty(...),
				msg_id : 71,
				user_id : -8325252875418913664,
			),
			$client->inputPeerChannelFromMessage(
				peer : $client->inputPeerEmpty(...),
				msg_id : 63,
				channel_id : 1303229986600135927,
			),
		),
	),
	description : '5hYHry0QKXBmRsEJ',
);
```