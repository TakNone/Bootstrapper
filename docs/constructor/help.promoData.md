# help.promoData

**Description** : *A set of useful suggestions and a PSA/MTProxy sponsored peer, see here &raquo; for more info*

**Layer** : 218

```tl
help.promoData#8a4d87a flags:# proxy:flags.0?true expires:int peer:flags.3?Peer psa_type:flags.1?string psa_message:flags.2?string pending_suggestions:Vector<string> dismissed_suggestions:Vector<string> custom_pending_suggestion:flags.4?PendingSuggestion chats:Vector<Chat> users:Vector<User> = help.PromoData;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **proxy** | [`flags.0?true`](type/true) | Set when connecting using an MTProxy that has configured an associated peer (that will be passed in peer, i.e. the channel that sponsored the MTProxy) that should be pinned on top of the chat list |
| <mark>expires</mark> | [`int`](type/int) | Unixtime when to re-invoke help.getPromoData |
| **peer** | [`flags.3?Peer`](type/Peer) | MTProxy/PSA peer |
| **psa_type** | [`flags.1?string`](type/string) | For Public Service Announcement peers, indicates the type of the PSA |
| **psa_message** | [`flags.2?string`](type/string) | For Public Service Announcement peers, contains the PSA itself |
| <mark>pending_suggestions</mark> | [`Vector<string>`](type/string) | Contains a list of pending suggestions » |
| <mark>dismissed_suggestions</mark> | [`Vector<string>`](type/string) | Contains a list of inverted suggestions » |
| **custom_pending_suggestion** | [`flags.4?PendingSuggestion`](type/PendingSuggestion) | Contains a list of custom pending suggestions » |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Chat info |
| <mark>users</mark> | [`Vector<User>`](type/User) | User info |

---

## Type

[help.PromoData](type/help.PromoData)

---

## Example

```php
$helpPromoData = $client->help->promoData(
	proxy : true,
	expires : 33,
	peer : $client->peerUser(
		user_id : 8985682715941713606,
	),
	psa_type : 'OheEGl4Xb9jDrU0x',
	psa_message : '2heiQaRwSxubXfVk',
	pending_suggestions : array('AYR8phjrUue3VwvO'),
	dismissed_suggestions : array('C9iw1fA4u8tRasYH'),
	custom_pending_suggestion : $client->pendingSuggestion(
		suggestion : 'PG3q9g4M7pzQ1ZmB',
		title : $client->textWithEntities(
			text : 'biOGIY3MWtCXvZuB',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 37,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 7,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 62,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 66,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 5,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 21,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 22,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 6,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 43,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 3,
					language : 'vobPAkf6tlH31USu',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 13,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 8,
					user_id : -2777984501667259436,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 84,
					user_id : $client->get_input_user(peer : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 74,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 28,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 11,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 39,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 7,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 80,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 99,
					document_id : -1872399741645301492,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 22,
				),
			),
		),
		description : $client->textWithEntities(
			text : '4dHGRMkqAYxua0nc',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 85,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 10,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 58,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 67,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 81,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 74,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 75,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 39,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 88,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 0,
					language : 'jzK0xNJrYBRwu7WM',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 83,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 12,
					user_id : -1149737235114008747,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 1,
					user_id : $client->get_input_user(peer : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 41,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 57,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 9,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 19,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 94,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 36,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 44,
					document_id : 4267847868828013432,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 47,
				),
			),
		),
		url : 'https://docs.liveproto.dev',
	),
	chats : array(
		$client->chatEmpty(
			id : -1128394209366929456,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -7406691906358441029,
			title : 'zp5KFwxkgBIyfPcs',
			photo : $client->chatPhotoEmpty(),
			participants_count : 64,
			date : 46,
			version : 66,
			migrated_to : $client->get_input_channel(peer : '@LiveProto'),
			admin_rights : $client->chatAdminRights(
				change_info : true,
				post_messages : true,
				edit_messages : true,
				delete_messages : true,
				ban_users : true,
				invite_users : true,
				pin_messages : true,
				add_admins : true,
				anonymous : true,
				manage_call : true,
				other : true,
				manage_topics : true,
				post_stories : true,
				edit_stories : true,
				delete_stories : true,
				manage_direct_messages : true,
			),
			default_banned_rights : $client->chatBannedRights(
				view_messages : true,
				send_messages : true,
				send_media : true,
				send_stickers : true,
				send_gifs : true,
				send_games : true,
				send_inline : true,
				embed_links : true,
				send_polls : true,
				change_info : true,
				invite_users : true,
				pin_messages : true,
				manage_topics : true,
				send_photos : true,
				send_videos : true,
				send_roundvideos : true,
				send_audios : true,
				send_voices : true,
				send_docs : true,
				send_plain : true,
				until_date : 2,
			),
		),
		$client->chatForbidden(
			id : -2828665475698901875,
			title : 'qzb1OZtVcApSkxn9',
		),
		$client->channel(
			creator : true,
			left : true,
			broadcast : true,
			verified : true,
			megagroup : true,
			restricted : true,
			signatures : true,
			min : true,
			scam : true,
			has_link : true,
			has_geo : true,
			slowmode_enabled : true,
			call_active : true,
			call_not_empty : true,
			fake : true,
			gigagroup : true,
			noforwards : true,
			join_to_send : true,
			join_request : true,
			forum : true,
			stories_hidden : true,
			stories_hidden_min : true,
			stories_unavailable : true,
			signature_profiles : true,
			autotranslation : true,
			broadcast_messages_allowed : true,
			monoforum : true,
			forum_tabs : true,
			id : 2542038932146039405,
			access_hash : 5788045684766258758,
			title : 'X2UbSFChN7EoLglx',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 14,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'OT7GWRsEJ01pFfcQ',
					reason : 'IwR7aH2lmzfKJtxe',
					text : 'd1jkV2QcabKsUAzl',
				),
			),
			admin_rights : $client->chatAdminRights(
				change_info : true,
				post_messages : true,
				edit_messages : true,
				delete_messages : true,
				ban_users : true,
				invite_users : true,
				pin_messages : true,
				add_admins : true,
				anonymous : true,
				manage_call : true,
				other : true,
				manage_topics : true,
				post_stories : true,
				edit_stories : true,
				delete_stories : true,
				manage_direct_messages : true,
			),
			banned_rights : $client->chatBannedRights(
				view_messages : true,
				send_messages : true,
				send_media : true,
				send_stickers : true,
				send_gifs : true,
				send_games : true,
				send_inline : true,
				embed_links : true,
				send_polls : true,
				change_info : true,
				invite_users : true,
				pin_messages : true,
				manage_topics : true,
				send_photos : true,
				send_videos : true,
				send_roundvideos : true,
				send_audios : true,
				send_voices : true,
				send_docs : true,
				send_plain : true,
				until_date : 39,
			),
			default_banned_rights : $client->chatBannedRights(
				view_messages : true,
				send_messages : true,
				send_media : true,
				send_stickers : true,
				send_gifs : true,
				send_games : true,
				send_inline : true,
				embed_links : true,
				send_polls : true,
				change_info : true,
				invite_users : true,
				pin_messages : true,
				manage_topics : true,
				send_photos : true,
				send_videos : true,
				send_roundvideos : true,
				send_audios : true,
				send_voices : true,
				send_docs : true,
				send_plain : true,
				until_date : 71,
			),
			participants_count : 43,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 34,
			),
			color : $client->peerColor(
				color : 27,
				background_emoji_id : 77322501167465144,
			),
			profile_color : $client->peerColor(
				color : 82,
				background_emoji_id : 4133154131301250904,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 34,
			subscription_until_date : 3,
			bot_verification_icon : 558571310464333264,
			send_paid_messages_stars : -7806608529374716256,
			linked_monoforum_id : 5892307111926143295,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 3823092661236550842,
			access_hash : -5217052999057973633,
			title : 'OmRio2ynxuCSqKQs',
			until_date : 40,
		),
	),
	users : array(
		$client->userEmpty(
			id : -3142102502565898149,
		),
		$client->user(
			self : true,
			contact : true,
			mutual_contact : true,
			deleted : true,
			bot : true,
			bot_chat_history : true,
			bot_nochats : true,
			verified : true,
			restricted : true,
			min : true,
			bot_inline_geo : true,
			support : true,
			scam : true,
			apply_min_photo : true,
			fake : true,
			bot_attach_menu : true,
			premium : true,
			attach_menu_enabled : true,
			bot_can_edit : true,
			close_friend : true,
			stories_hidden : true,
			stories_unavailable : true,
			contact_require_premium : true,
			bot_business : true,
			bot_has_main_app : true,
			bot_forum_view : true,
			id : -5365174407955817121,
			access_hash : 7836959052257796717,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 5,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'oyVtRQedCMTWE7Kh',
					reason : 'Cdotz1V9pFla4uXc',
					text : '4vrfjlxNyiQTs2ag',
				),
			),
			bot_inline_placeholder : 'OHPJSF42vwcMI8Ke',
			lang_code : '3yqMocviVARZYEXm',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 59,
			),
			color : $client->peerColor(
				color : 61,
				background_emoji_id : -6074417080291628450,
			),
			profile_color : $client->peerColor(
				color : 54,
				background_emoji_id : 7105207121156531443,
			),
			bot_active_users : 53,
			bot_verification_icon : 3319625669717148480,
			send_paid_messages_stars : -3280522192111961471,
		),
	),
);
```