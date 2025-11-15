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
			id : 57,
			title : $client->textWithEntities(
				text : 'MziBTvEFG6YHftx8',
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
			emoticon : 'wAPcazTLxqfhkMXJ',
			color : 75,
			pinned_peers : array(
				$client->inputPeerEmpty(),
				$client->inputPeerSelf(),
				$client->inputPeerChat(
					chat_id : -6144615394386460421,
				),
				$client->inputPeerUser(
					user_id : -8666378652583499893,
					access_hash : 4609788643011666359,
				),
				$client->inputPeerChannel(
					channel_id : -4817550751922152177,
					access_hash : -8478372482475101664,
				),
				$client->inputPeerUserFromMessage(
					peer : $client->inputPeerEmpty(...),
					msg_id : 65,
					user_id : -2084504382329502560,
				),
				$client->inputPeerChannelFromMessage(
					peer : $client->inputPeerEmpty(...),
					msg_id : 10,
					channel_id : 4238498388153044815,
				),
			),
			include_peers : array(
				$client->inputPeerEmpty(),
				$client->inputPeerSelf(),
				$client->inputPeerChat(
					chat_id : 6447951154496773818,
				),
				$client->inputPeerUser(
					user_id : 8793157430407911210,
					access_hash : 5774994969609826103,
				),
				$client->inputPeerChannel(
					channel_id : 51247284920270852,
					access_hash : -9113650212114951220,
				),
				$client->inputPeerUserFromMessage(
					peer : $client->inputPeerEmpty(...),
					msg_id : 21,
					user_id : -1640167955327176309,
				),
				$client->inputPeerChannelFromMessage(
					peer : $client->inputPeerEmpty(...),
					msg_id : 4,
					channel_id : 7487400982197143611,
				),
			),
			exclude_peers : array(
				$client->inputPeerEmpty(),
				$client->inputPeerSelf(),
				$client->inputPeerChat(
					chat_id : 4171973306118860553,
				),
				$client->inputPeerUser(
					user_id : 3059664402891711399,
					access_hash : 3745508145768865924,
				),
				$client->inputPeerChannel(
					channel_id : 4675308259532759525,
					access_hash : 5927179170550985253,
				),
				$client->inputPeerUserFromMessage(
					peer : $client->inputPeerEmpty(...),
					msg_id : 7,
					user_id : 3676206673758007089,
				),
				$client->inputPeerChannelFromMessage(
					peer : $client->inputPeerEmpty(...),
					msg_id : 100,
					channel_id : 5638631294360382970,
				),
			),
		),
		$client->dialogFilterDefault(),
		$client->dialogFilterChatlist(
			has_my_invites : true,
			title_noanimate : true,
			id : 94,
			title : $client->textWithEntities(
				text : 'w9q4KOLCrQZRpgbM',
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
			emoticon : 'bGoK0DCcSRs7AMih',
			color : 8,
			pinned_peers : array(
				$client->inputPeerEmpty(),
				$client->inputPeerSelf(),
				$client->inputPeerChat(
					chat_id : -5495219258486059307,
				),
				$client->inputPeerUser(
					user_id : -2657295389735731539,
					access_hash : -4227575262573889152,
				),
				$client->inputPeerChannel(
					channel_id : 4289241737669517860,
					access_hash : -2628612463404840261,
				),
				$client->inputPeerUserFromMessage(
					peer : $client->inputPeerEmpty(...),
					msg_id : 14,
					user_id : 7641592586865402471,
				),
				$client->inputPeerChannelFromMessage(
					peer : $client->inputPeerEmpty(...),
					msg_id : 41,
					channel_id : -1280480964958586941,
				),
			),
			include_peers : array(
				$client->inputPeerEmpty(),
				$client->inputPeerSelf(),
				$client->inputPeerChat(
					chat_id : 6702461449885097413,
				),
				$client->inputPeerUser(
					user_id : -4795369350365075117,
					access_hash : -2018055862168403846,
				),
				$client->inputPeerChannel(
					channel_id : 3026641802048323390,
					access_hash : 8200806438501527471,
				),
				$client->inputPeerUserFromMessage(
					peer : $client->inputPeerEmpty(...),
					msg_id : 23,
					user_id : 8347451713556786373,
				),
				$client->inputPeerChannelFromMessage(
					peer : $client->inputPeerEmpty(...),
					msg_id : 88,
					channel_id : 5232971946634165645,
				),
			),
		),
	),
);
```