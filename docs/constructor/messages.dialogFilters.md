# messages.dialogFilters

**Description** : *Folder and folder tags information*

**Layer** : 214

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
			id : 21,
			title : $client->textWithEntities(
				text : 'cxZspLwWBbXEql0k',
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
			emoticon : 'aDU3Xb254jMLAyTi',
			color : 40,
			pinned_peers : array(
				$client->inputPeerEmpty(),
				$client->inputPeerSelf(),
				$client->inputPeerChat(
					chat_id : -3711626155376367425,
				),
				$client->inputPeerUser(
					user_id : 6661664340087504438,
					access_hash : -6014192453984911117,
				),
				$client->inputPeerChannel(
					channel_id : 6315147676827224879,
					access_hash : 1195083614806173352,
				),
				$client->inputPeerUserFromMessage(
					peer : $client->inputPeerEmpty(...),
					msg_id : 77,
					user_id : -3917444287396607696,
				),
				$client->inputPeerChannelFromMessage(
					peer : $client->inputPeerEmpty(...),
					msg_id : 77,
					channel_id : -5203437302562405159,
				),
			),
			include_peers : array(
				$client->inputPeerEmpty(),
				$client->inputPeerSelf(),
				$client->inputPeerChat(
					chat_id : 5484092706785407553,
				),
				$client->inputPeerUser(
					user_id : 4318816627030173574,
					access_hash : -1519543110688348831,
				),
				$client->inputPeerChannel(
					channel_id : -3281093096032254953,
					access_hash : 7475651212687115191,
				),
				$client->inputPeerUserFromMessage(
					peer : $client->inputPeerEmpty(...),
					msg_id : 51,
					user_id : 4398751460757683565,
				),
				$client->inputPeerChannelFromMessage(
					peer : $client->inputPeerEmpty(...),
					msg_id : 38,
					channel_id : 6043937187603395403,
				),
			),
			exclude_peers : array(
				$client->inputPeerEmpty(),
				$client->inputPeerSelf(),
				$client->inputPeerChat(
					chat_id : -5273876402452060917,
				),
				$client->inputPeerUser(
					user_id : 4678043297425619378,
					access_hash : -2258343098624130260,
				),
				$client->inputPeerChannel(
					channel_id : -6679742982809333016,
					access_hash : 13448174136624517,
				),
				$client->inputPeerUserFromMessage(
					peer : $client->inputPeerEmpty(...),
					msg_id : 69,
					user_id : -5115157844115853881,
				),
				$client->inputPeerChannelFromMessage(
					peer : $client->inputPeerEmpty(...),
					msg_id : 33,
					channel_id : 6813966501211992477,
				),
			),
		),
		$client->dialogFilterDefault(),
		$client->dialogFilterChatlist(
			has_my_invites : true,
			title_noanimate : true,
			id : 89,
			title : $client->textWithEntities(
				text : 'sO8xTHBGF46NDv3i',
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
			emoticon : 'nvS6YCQNebGZHaqX',
			color : 39,
			pinned_peers : array(
				$client->inputPeerEmpty(),
				$client->inputPeerSelf(),
				$client->inputPeerChat(
					chat_id : -5717554916849997171,
				),
				$client->inputPeerUser(
					user_id : -5663983077582648134,
					access_hash : 8270339310584816415,
				),
				$client->inputPeerChannel(
					channel_id : -8634133833540166488,
					access_hash : 5569680761854738123,
				),
				$client->inputPeerUserFromMessage(
					peer : $client->inputPeerEmpty(...),
					msg_id : 36,
					user_id : 2009568960419895565,
				),
				$client->inputPeerChannelFromMessage(
					peer : $client->inputPeerEmpty(...),
					msg_id : 88,
					channel_id : -9033154130591953297,
				),
			),
			include_peers : array(
				$client->inputPeerEmpty(),
				$client->inputPeerSelf(),
				$client->inputPeerChat(
					chat_id : -283831290637805465,
				),
				$client->inputPeerUser(
					user_id : -4843243795052459887,
					access_hash : -7832464670596949849,
				),
				$client->inputPeerChannel(
					channel_id : 530684300713906369,
					access_hash : -4356552627247749919,
				),
				$client->inputPeerUserFromMessage(
					peer : $client->inputPeerEmpty(...),
					msg_id : 34,
					user_id : -1921954658585475438,
				),
				$client->inputPeerChannelFromMessage(
					peer : $client->inputPeerEmpty(...),
					msg_id : 89,
					channel_id : -4081979792217310830,
				),
			),
		),
	),
);
```