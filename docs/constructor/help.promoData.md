# help.promoData

**Description** : *A set of useful suggestions and a PSA/MTProxy sponsored peer, see here &raquo; for more info*

**Layer** : 227

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
	expires : 91,
	peer : $client->peerUser(
		user_id : -2662583146052971321,
	),
	psa_type : 'RajSUGDCoQAiBrlc',
	psa_message : '8wVRrAmSjltKFuQy',
	pending_suggestions : array('0TyDGpn5Yj4NCKA8'),
	dismissed_suggestions : array('NnewHBqru6y4lbRQ'),
	custom_pending_suggestion : $client->pendingSuggestion(
		suggestion : 'gWhu7LXjDEBrPCUe',
		title : $client->textWithEntities(
			text : 'DutM1crhkqQxv5An',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 14,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 38,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 92,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 32,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 31,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 25,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 27,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 98,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 21,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 90,
					language : 'ZGRElDswU7hotk5L',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 85,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 100,
					user_id : -7772359252890939917,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 16,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 39,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 100,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 98,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 84,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 52,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 80,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 29,
					document_id : 2441603076226929143,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 10,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 83,
					date : 48,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 73,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 18,
					old_text : '4xZMQIiLWD170TzA',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 49,
				),
			),
		),
		description : $client->textWithEntities(
			text : '3lXhnCUtewN4PkmL',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 72,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 16,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 72,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 75,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 34,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 20,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 39,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 96,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 59,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 67,
					language : 'HRf6kApcVyzodN7S',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 88,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 55,
					user_id : -1687122126613680057,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 73,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 89,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 2,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 68,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 5,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 82,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 27,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 49,
					document_id : -1704926039903982186,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 71,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 91,
					date : 45,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 5,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 49,
					old_text : 'doLYs1t9nXbFy7mg',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 37,
				),
			),
		),
		url : 'https://docs.liveproto.dev',
	),
	chats : array(
		$client->chatEmpty(
			id : 3809324440713192870,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -6676026900503949337,
			title : 'U4vu6FzgIC5yDk2E',
			photo : $client->chatPhotoEmpty(),
			participants_count : 29,
			date : 91,
			version : 73,
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
				manage_ranks : true,
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
				edit_rank : true,
				send_reactions : true,
				until_date : 1,
			),
		),
		$client->chatForbidden(
			id : -7843764435449449842,
			title : 'jLRP5UAYx4DOugcV',
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
			id : -8282876656444167621,
			access_hash : 5146209953130980123,
			title : 'jo23eKFUyQS5DcuX',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 8,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'xrpLvG7nzYtAg3dU',
					reason : 'mHJjB3VZIP0qWeA7',
					text : '65FI1rDTNjAto908',
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
				manage_ranks : true,
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
				edit_rank : true,
				send_reactions : true,
				until_date : 73,
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
				edit_rank : true,
				send_reactions : true,
				until_date : 35,
			),
			participants_count : 94,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 33,
			),
			color : $client->peerColor(
				color : 6,
				background_emoji_id : 369632194621168148,
			),
			profile_color : $client->peerColor(
				color : 43,
				background_emoji_id : -2835522742814511579,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 45,
			subscription_until_date : 73,
			bot_verification_icon : -8041570785373139448,
			send_paid_messages_stars : -2111997823201187994,
			linked_monoforum_id : 8964817678457032983,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : -1994507937084148797,
			access_hash : -1689495258706588993,
			title : 'tnHBjQy6Gpqg9acu',
			until_date : 83,
		),
	),
	users : array(
		$client->userEmpty(
			id : -1470035308612670979,
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
			bot_forum_can_manage_topics : true,
			bot_can_manage_bots : true,
			bot_guestchat : true,
			bot_guard : true,
			id : -8803723069870372470,
			access_hash : 5042829829904746396,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 62,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'Bqw8hI3jHOk5lcJT',
					reason : 'bBSGET4AD36pMeya',
					text : 'GbqQOuNtYfAdRW82',
				),
			),
			bot_inline_placeholder : 'zI0uZt89UcGKqLis',
			lang_code : 'kBlF8XTODnU1p0ax',
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
				max_id : 44,
			),
			color : $client->peerColor(
				color : 2,
				background_emoji_id : -6731803867892429666,
			),
			profile_color : $client->peerColor(
				color : 54,
				background_emoji_id : 7539875349853981878,
			),
			bot_active_users : 21,
			bot_verification_icon : -6435506869077815062,
			send_paid_messages_stars : 1462197006351385731,
		),
	),
);
```