# messages.dialogFilters

**Description** : *Folder and folder tags information*

**Layer** : 222

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
			id : 43,
			title : $client->textWithEntities(
				text : '5XaItxhL0qrnyNe2',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 45,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 10,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 81,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 74,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 46,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 99,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 61,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 59,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 62,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 95,
						language : 'lG2z470T3VjLFNPy',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 0,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 38,
						user_id : 1303427750628691040,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 77,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 13,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 98,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 55,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 39,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 70,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 87,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 77,
						document_id : -7430109835717092646,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 13,
					),
				),
			),
			emoticon : 'fIzrFbEuq2ZRmeCw',
			color : 47,
			pinned_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
			include_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
			exclude_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
		),
		$client->dialogFilterDefault(),
		$client->dialogFilterChatlist(
			has_my_invites : true,
			title_noanimate : true,
			id : 42,
			title : $client->textWithEntities(
				text : 'CQxNgHZaiw30bTeB',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 98,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 84,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 60,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 40,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 53,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 36,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 33,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 48,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 11,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 98,
						language : 'Bc5ICbdWqjrAZ4wz',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 1,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 87,
						user_id : -9129608946072260460,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 59,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 42,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 95,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 72,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 96,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 82,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 89,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 46,
						document_id : 5807553182366439766,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 56,
					),
				),
			),
			emoticon : 'yKJqe2mIhXpAjwkF',
			color : 77,
			pinned_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
			include_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
		),
	),
);
```