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
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
	expires : 15,
	peer : $client->peerUser(
		user_id : 3044677187012261416,
	),
	psa_type : '1SvyfDOAprWdCtl0',
	psa_message : 'F43IBJEe2xoR7Q9S',
	pending_suggestions : array('Jegx76Vion2rN1jL'),
	dismissed_suggestions : array('HUJPxrg3VCNYzoIy'),
	custom_pending_suggestion : $client->pendingSuggestion(
		suggestion : 'WiespNyOoYtwPE5d',
		title : $client->textWithEntities(
			text : 'dapNZDuWY0CeTl4P',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 80,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 61,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 3,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 40,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 73,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 100,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 69,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 51,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 93,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 19,
					language : 'iCFALhveKj0w2S7l',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 71,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 89,
					user_id : -5462197554004144395,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 60,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 27,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 17,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 50,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 63,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 61,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 30,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 16,
					document_id : 291037780077188278,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 15,
				),
			),
		),
		description : $client->textWithEntities(
			text : 'NgPR1VudbtiBQWo8',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 7,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 51,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 91,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 27,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 22,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 86,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 23,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 0,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 94,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 23,
					language : 'hw4RFmqDeofMZrB7',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 26,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 0,
					user_id : -2148868621219593315,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 53,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 33,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 100,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 66,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 58,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 25,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 24,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 44,
					document_id : -1215704123898066949,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 59,
				),
			),
		),
		url : 'https://docs.liveproto.dev',
	),
	chats : array(
		$client->chatEmpty(
			id : -6795399127661979648,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -3087498406460007353,
			title : 'WlEfZO93vriIzM6Q',
			photo : $client->chatPhotoEmpty(),
			participants_count : 74,
			date : 27,
			version : 75,
			migrated_to : $client->get_input_channel(channel : '@LiveProto'),
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
				until_date : 17,
			),
		),
		$client->chatForbidden(
			id : -5641861896383296803,
			title : 'ZasI8Q0grRz6VH5m',
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
			id : -8605572658337008974,
			access_hash : 4493730428708674137,
			title : 'Eincdu9W40j72HkX',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 41,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'KcHXYtZqepdxTjV5',
					reason : 'CLZcI851jYyUrv0O',
					text : '961OdRQNYEefxoFX',
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
				until_date : 57,
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
				until_date : 86,
			),
			participants_count : 71,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 29,
			),
			color : $client->peerColor(
				color : 71,
				background_emoji_id : -6164159989623237823,
			),
			profile_color : $client->peerColor(
				color : 33,
				background_emoji_id : -6486532178028096794,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 32,
			subscription_until_date : 28,
			bot_verification_icon : -5675611283095029597,
			send_paid_messages_stars : -2848474186363867110,
			linked_monoforum_id : -3273266276514514054,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -2709745373856516423,
			access_hash : -5913854909769065706,
			title : 'uoBz7CbdXnT6HN84',
			until_date : 99,
		),
	),
	users : array(
		$client->userEmpty(
			id : -2170535986018446997,
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
			id : 8978549938133426817,
			access_hash : -1916344174141249061,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 75,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'jSoDOil28F9rhnYg',
					reason : 'cQtO7DMeG4gl2hzF',
					text : 'h0jWFPo1KcVlv5uY',
				),
			),
			bot_inline_placeholder : 'vZTlFa0CGW9szgmS',
			lang_code : '10W7RvwXxmg4jHQ5',
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
				max_id : 29,
			),
			color : $client->peerColor(
				color : 9,
				background_emoji_id : -8387314345036006943,
			),
			profile_color : $client->peerColor(
				color : 52,
				background_emoji_id : 173150171379935224,
			),
			bot_active_users : 87,
			bot_verification_icon : -8069147932364940671,
			send_paid_messages_stars : -5340520966052271565,
		),
	),
);
```