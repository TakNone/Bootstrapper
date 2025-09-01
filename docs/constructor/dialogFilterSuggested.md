# dialogFilterSuggested

**Description** : *Suggested folders*

**Layer** : 214

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
		id : 50,
		title : $client->textWithEntities(
			text : '895opZWzGLfRTbJ7',
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
		emoticon : 'GI7jVOotWy58iJ0e',
		color : 56,
		pinned_peers : array(
			$client->inputPeerEmpty(),
			$client->inputPeerSelf(),
			$client->inputPeerChat(
				chat_id : 8631196993073451528,
			),
			$client->inputPeerUser(
				user_id : -5943292740014631260,
				access_hash : -4148991712710016129,
			),
			$client->inputPeerChannel(
				channel_id : -3330954507336425305,
				access_hash : 3228766017072395121,
			),
			$client->inputPeerUserFromMessage(
				peer : $client->inputPeerEmpty(...),
				msg_id : 79,
				user_id : 244279513658409320,
			),
			$client->inputPeerChannelFromMessage(
				peer : $client->inputPeerEmpty(...),
				msg_id : 74,
				channel_id : -7678691651381351160,
			),
		),
		include_peers : array(
			$client->inputPeerEmpty(),
			$client->inputPeerSelf(),
			$client->inputPeerChat(
				chat_id : 8445352741260590445,
			),
			$client->inputPeerUser(
				user_id : 5082716486381456039,
				access_hash : 854925811824752944,
			),
			$client->inputPeerChannel(
				channel_id : 1835068283019879060,
				access_hash : 4073041748829313607,
			),
			$client->inputPeerUserFromMessage(
				peer : $client->inputPeerEmpty(...),
				msg_id : 14,
				user_id : -111820351155250624,
			),
			$client->inputPeerChannelFromMessage(
				peer : $client->inputPeerEmpty(...),
				msg_id : 61,
				channel_id : 242519705674872248,
			),
		),
		exclude_peers : array(
			$client->inputPeerEmpty(),
			$client->inputPeerSelf(),
			$client->inputPeerChat(
				chat_id : -6984444240977295991,
			),
			$client->inputPeerUser(
				user_id : 6908317573040156250,
				access_hash : -4232258381515224563,
			),
			$client->inputPeerChannel(
				channel_id : -6524795664377816824,
				access_hash : -2538164994441154997,
			),
			$client->inputPeerUserFromMessage(
				peer : $client->inputPeerEmpty(...),
				msg_id : 27,
				user_id : -4846774904801437020,
			),
			$client->inputPeerChannelFromMessage(
				peer : $client->inputPeerEmpty(...),
				msg_id : 34,
				channel_id : -2731131720637178791,
			),
		),
	),
	description : 'gqOnksmzDYIFhyCa',
);
```