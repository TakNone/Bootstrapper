# messages.dialogFilters

**Description** : *Folder and folder tags information*

**Layer** : 225

```tl
messages.dialogFilters#2ad93719 flags:# tags_enabled:flags.0?true filters:Vector<DialogFilter> = messages.DialogFilters;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
			id : 85,
			title : $client->textWithEntities(
				text : 'hioEMmnBCJFUdx1W',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 50,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 41,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 37,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 55,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 68,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 92,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 0,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 50,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 45,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 66,
						language : 'lXA2qoYByW68mtz7',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 9,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 62,
						user_id : 5253782938899638930,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 32,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 98,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 92,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 42,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 65,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 88,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 21,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 34,
						document_id : 9129409538057129548,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 53,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 0,
						date : 36,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 3,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 79,
						old_text : 'yVUN6AR0I8C3YpMB',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 44,
					),
				),
			),
			emoticon : 'lGFo4ZQDnvYSxCmh',
			color : 89,
			pinned_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
			include_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
			exclude_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
		),
		$client->dialogFilterDefault(),
		$client->dialogFilterChatlist(
			has_my_invites : true,
			title_noanimate : true,
			id : 83,
			title : $client->textWithEntities(
				text : '453sXzh7yHYKQLJD',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 58,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 27,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 50,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 61,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 69,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 20,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 40,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 41,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 20,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 80,
						language : 'H7ZxgzcupN2tXlq1',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 56,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 68,
						user_id : -6845548925499249543,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 54,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 64,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 43,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 41,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 25,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 89,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 14,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 41,
						document_id : -7307135346756822655,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 42,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 98,
						date : 45,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 24,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 17,
						old_text : 'CXHeBUycuL9DEWdV',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 97,
					),
				),
			),
			emoticon : '4bekRdFUBWnoKmCG',
			color : 18,
			pinned_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
			include_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
		),
	),
);
```