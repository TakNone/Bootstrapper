# dialogFilterSuggested

**Description** : *Suggested folders*

**Layer** : 211

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
		id : 41,
		title : $client->textWithEntities(
			text : '1WlpfvQNYsB2yKVT',
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
		emoticon : 'L8qmW09pcyuBPnFR',
		color : 30,
		pinned_peers : array(
			$client->inputPeerEmpty(),
			$client->inputPeerSelf(),
			$client->inputPeerChat(
				chat_id : 8170772753035004867,
			),
			$client->inputPeerUser(
				user_id : 4956288212888066861,
				access_hash : 8820011358598378313,
			),
			$client->inputPeerChannel(
				channel_id : -1871515267969275779,
				access_hash : -2481892314751059073,
			),
			$client->inputPeerUserFromMessage(
				peer : $client->inputPeerEmpty(...),
				msg_id : 41,
				user_id : 3152791949349138136,
			),
			$client->inputPeerChannelFromMessage(
				peer : $client->inputPeerEmpty(...),
				msg_id : 75,
				channel_id : -3265310575750955374,
			),
		),
		include_peers : array(
			$client->inputPeerEmpty(),
			$client->inputPeerSelf(),
			$client->inputPeerChat(
				chat_id : 7155791241350777379,
			),
			$client->inputPeerUser(
				user_id : -8384617238870789268,
				access_hash : 1827017680859909469,
			),
			$client->inputPeerChannel(
				channel_id : -1874234227380658292,
				access_hash : -7916996560568893396,
			),
			$client->inputPeerUserFromMessage(
				peer : $client->inputPeerEmpty(...),
				msg_id : 64,
				user_id : -7547062475059540676,
			),
			$client->inputPeerChannelFromMessage(
				peer : $client->inputPeerEmpty(...),
				msg_id : 26,
				channel_id : 4273295104608830450,
			),
		),
		exclude_peers : array(
			$client->inputPeerEmpty(),
			$client->inputPeerSelf(),
			$client->inputPeerChat(
				chat_id : 6612418628569382083,
			),
			$client->inputPeerUser(
				user_id : -1897162998955607774,
				access_hash : 3754971159651750992,
			),
			$client->inputPeerChannel(
				channel_id : 7717129841425058630,
				access_hash : 2801052952970741446,
			),
			$client->inputPeerUserFromMessage(
				peer : $client->inputPeerEmpty(...),
				msg_id : 7,
				user_id : -6958744101398363868,
			),
			$client->inputPeerChannelFromMessage(
				peer : $client->inputPeerEmpty(...),
				msg_id : 50,
				channel_id : -117325685388468699,
			),
		),
	),
	description : 'ePtcTHk6XaLrK9WV',
);
```