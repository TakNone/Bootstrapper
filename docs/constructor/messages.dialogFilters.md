# messages.dialogFilters

**Description** : *Folder and folder tags information*

**Layer** : 216

```tl
messages.dialogFilters#2ad93719 flags:# tags_enabled:flags.0?true filters:Vector<DialogFilter> = messages.DialogFilters;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **tags_enabled** | [`flags.0?true`](type/true) | Whether folder tags are enabled |
| <mark>filters</mark> | [`Vector<DialogFilter>`](type/DialogFilter) | Folders |

---

## Type

[messages.DialogFilters](type/messages.DialogFilters)

---

## Example

```php
$messagesDialogFilters = $client->messages->dialogFilters(
	tags_enabled : true,
	filters : array(
		$client->dialogFilter(
			contacts : true,
			non_contacts : true,
			groups : true,
			broadcasts : true,
			bots : true,
			exclude_muted : true,
			exclude_read : true,
			exclude_archived : true,
			title_noanimate : true,
			id : 69,
			title : $client->textWithEntities(
				text : '2MYkVWGZyxAvnE5w',
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
			emoticon : 'Cylf2EV3zri0ItF5',
			color : 97,
			pinned_peers : array(
				$client->inputPeerEmpty(),
				$client->inputPeerSelf(),
				$client->inputPeerChat(
					chat_id : -2697352010151168390,
				),
				$client->inputPeerUser(
					user_id : -214156308470802709,
					access_hash : -1379270639049036945,
				),
				$client->inputPeerChannel(
					channel_id : 8008743807466751617,
					access_hash : -6287915758931214697,
				),
				$client->inputPeerUserFromMessage(
					peer : $client->inputPeerEmpty(...),
					msg_id : 94,
					user_id : 4335059169106455675,
				),
				$client->inputPeerChannelFromMessage(
					peer : $client->inputPeerEmpty(...),
					msg_id : 54,
					channel_id : 6743382387526150219,
				),
			),
			include_peers : array(
				$client->inputPeerEmpty(),
				$client->inputPeerSelf(),
				$client->inputPeerChat(
					chat_id : -5769021182834433786,
				),
				$client->inputPeerUser(
					user_id : 1877386110788557476,
					access_hash : -1995294539224936089,
				),
				$client->inputPeerChannel(
					channel_id : 5610615452730305444,
					access_hash : -7463077212621598444,
				),
				$client->inputPeerUserFromMessage(
					peer : $client->inputPeerEmpty(...),
					msg_id : 92,
					user_id : 4773200153981104071,
				),
				$client->inputPeerChannelFromMessage(
					peer : $client->inputPeerEmpty(...),
					msg_id : 37,
					channel_id : 6017453918718832192,
				),
			),
			exclude_peers : array(
				$client->inputPeerEmpty(),
				$client->inputPeerSelf(),
				$client->inputPeerChat(
					chat_id : 7349507043030997747,
				),
				$client->inputPeerUser(
					user_id : -8913236705434197054,
					access_hash : -8648434266823621821,
				),
				$client->inputPeerChannel(
					channel_id : 6297790942205056134,
					access_hash : -7142559551421831273,
				),
				$client->inputPeerUserFromMessage(
					peer : $client->inputPeerEmpty(...),
					msg_id : 51,
					user_id : -3068355022179417108,
				),
				$client->inputPeerChannelFromMessage(
					peer : $client->inputPeerEmpty(...),
					msg_id : 34,
					channel_id : 6380231611134056592,
				),
			),
		),
		$client->dialogFilterDefault(),
		$client->dialogFilterChatlist(
			has_my_invites : true,
			title_noanimate : true,
			id : 13,
			title : $client->textWithEntities(
				text : 'WIENCYnaUbMcdSXV',
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
			emoticon : 'qhvewRXDE6AJ2ZKk',
			color : 84,
			pinned_peers : array(
				$client->inputPeerEmpty(),
				$client->inputPeerSelf(),
				$client->inputPeerChat(
					chat_id : -7360241554770806962,
				),
				$client->inputPeerUser(
					user_id : 4172002948711981366,
					access_hash : 8805439847924335569,
				),
				$client->inputPeerChannel(
					channel_id : 6168602994915091232,
					access_hash : 4079980024625153814,
				),
				$client->inputPeerUserFromMessage(
					peer : $client->inputPeerEmpty(...),
					msg_id : 59,
					user_id : 3701056764284440720,
				),
				$client->inputPeerChannelFromMessage(
					peer : $client->inputPeerEmpty(...),
					msg_id : 2,
					channel_id : -2273736659911527192,
				),
			),
			include_peers : array(
				$client->inputPeerEmpty(),
				$client->inputPeerSelf(),
				$client->inputPeerChat(
					chat_id : 1184582721144220745,
				),
				$client->inputPeerUser(
					user_id : 6330544017488247412,
					access_hash : 1921984154762490220,
				),
				$client->inputPeerChannel(
					channel_id : -3266696652345790636,
					access_hash : 7279746183359075722,
				),
				$client->inputPeerUserFromMessage(
					peer : $client->inputPeerEmpty(...),
					msg_id : 39,
					user_id : 5502537248349271530,
				),
				$client->inputPeerChannelFromMessage(
					peer : $client->inputPeerEmpty(...),
					msg_id : 13,
					channel_id : 1578604645249276630,
				),
			),
		),
	),
);
```