# messages.dialogFilters

**Description** : *Folder and folder tags information*

**Layer** : 211

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
			id : 37,
			title : $client->textWithEntities(
				text : 'M43WRFHqZINPhTma',
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
			emoticon : 'hn9fgvrzUexaYFSO',
			color : 42,
			pinned_peers : array(
				$client->inputPeerEmpty(),
				$client->inputPeerSelf(),
				$client->inputPeerChat(
					chat_id : 7321565569514920554,
				),
				$client->inputPeerUser(
					user_id : -2513421332944492108,
					access_hash : -8566000259009237648,
				),
				$client->inputPeerChannel(
					channel_id : -4735777484497911316,
					access_hash : -2489218896413898819,
				),
				$client->inputPeerUserFromMessage(
					peer : $client->inputPeerEmpty(...),
					msg_id : 49,
					user_id : -1467084714377213070,
				),
				$client->inputPeerChannelFromMessage(
					peer : $client->inputPeerEmpty(...),
					msg_id : 45,
					channel_id : -8164031591852987205,
				),
			),
			include_peers : array(
				$client->inputPeerEmpty(),
				$client->inputPeerSelf(),
				$client->inputPeerChat(
					chat_id : -8785518108761503101,
				),
				$client->inputPeerUser(
					user_id : 336755983097356334,
					access_hash : -4143329218102447425,
				),
				$client->inputPeerChannel(
					channel_id : 8227383991715590407,
					access_hash : -130636690306601139,
				),
				$client->inputPeerUserFromMessage(
					peer : $client->inputPeerEmpty(...),
					msg_id : 54,
					user_id : -5197779938511731685,
				),
				$client->inputPeerChannelFromMessage(
					peer : $client->inputPeerEmpty(...),
					msg_id : 11,
					channel_id : -2778190935549525913,
				),
			),
			exclude_peers : array(
				$client->inputPeerEmpty(),
				$client->inputPeerSelf(),
				$client->inputPeerChat(
					chat_id : 1891881910390483433,
				),
				$client->inputPeerUser(
					user_id : 147180614750851108,
					access_hash : -7340233999034668276,
				),
				$client->inputPeerChannel(
					channel_id : -4549467587293892466,
					access_hash : 1965989618823609987,
				),
				$client->inputPeerUserFromMessage(
					peer : $client->inputPeerEmpty(...),
					msg_id : 22,
					user_id : -8733038714305532133,
				),
				$client->inputPeerChannelFromMessage(
					peer : $client->inputPeerEmpty(...),
					msg_id : 62,
					channel_id : -7030492539828644040,
				),
			),
		),
		$client->dialogFilterDefault(),
		$client->dialogFilterChatlist(
			has_my_invites : true,
			title_noanimate : true,
			id : 99,
			title : $client->textWithEntities(
				text : 'Z8smzDfOAGrkXeJQ',
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
			emoticon : 'rUzMDuELOqA5hJvK',
			color : 77,
			pinned_peers : array(
				$client->inputPeerEmpty(),
				$client->inputPeerSelf(),
				$client->inputPeerChat(
					chat_id : -3509258104381112057,
				),
				$client->inputPeerUser(
					user_id : -2915177801432853049,
					access_hash : -1622554669129656619,
				),
				$client->inputPeerChannel(
					channel_id : 5358516060716880659,
					access_hash : 8359068502002348448,
				),
				$client->inputPeerUserFromMessage(
					peer : $client->inputPeerEmpty(...),
					msg_id : 30,
					user_id : -5083782651168268225,
				),
				$client->inputPeerChannelFromMessage(
					peer : $client->inputPeerEmpty(...),
					msg_id : 51,
					channel_id : -655711056009517378,
				),
			),
			include_peers : array(
				$client->inputPeerEmpty(),
				$client->inputPeerSelf(),
				$client->inputPeerChat(
					chat_id : -2051925898258334258,
				),
				$client->inputPeerUser(
					user_id : -3437563757183943946,
					access_hash : 1924471079410026312,
				),
				$client->inputPeerChannel(
					channel_id : -6962258851872594070,
					access_hash : 2836033791046091903,
				),
				$client->inputPeerUserFromMessage(
					peer : $client->inputPeerEmpty(...),
					msg_id : 63,
					user_id : -6220543979093186616,
				),
				$client->inputPeerChannelFromMessage(
					peer : $client->inputPeerEmpty(...),
					msg_id : 17,
					channel_id : 1150199231820442674,
				),
			),
		),
	),
);
```