# help.promoData

**Description** : *A set of useful suggestions and a PSA/MTProxy sponsored peer, see here &raquo; for more info*

**Layer** : 222

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
	expires : 41,
	peer : $client->peerUser(
		user_id : 7636493241987864262,
	),
	psa_type : 'V7vAFkBsuiM4aeXz',
	psa_message : 'SxrJVIPsQn5Yilq0',
	pending_suggestions : array('HYtKJh2i0lnqB1Ty'),
	dismissed_suggestions : array('0hk9gdzaN8nE53p6'),
	custom_pending_suggestion : $client->pendingSuggestion(
		suggestion : 'iZGJS97IFCV6eUdB',
		title : $client->textWithEntities(
			text : 'XPF7ueVOYbTEfv5l',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 7,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 79,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 32,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 71,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 41,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 99,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 45,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 0,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 2,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 62,
					language : 'tYulIV35gwymOWpq',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 99,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 79,
					user_id : 1714784730586989678,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 79,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 5,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 28,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 89,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 72,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 89,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 73,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 40,
					document_id : -6832830587710974121,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 94,
				),
			),
		),
		description : $client->textWithEntities(
			text : 'Bv5hA0W14asPQ6N8',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 89,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 7,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 24,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 40,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 92,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 75,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 40,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 74,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 12,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 52,
					language : 'NCRKTMZEqxgwhW6f',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 58,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 15,
					user_id : -815465202235550766,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 29,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 9,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 88,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 89,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 58,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 76,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 45,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 42,
					document_id : 6859272897540976251,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 66,
				),
			),
		),
		url : 'https://docs.liveproto.dev',
	),
	chats : array(
		$client->chatEmpty(
			id : 2714307530053124034,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -4607551160467729468,
			title : 'IUd7rRz1WsZqwiHg',
			photo : $client->chatPhotoEmpty(),
			participants_count : 60,
			date : 86,
			version : 92,
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
				until_date : 28,
			),
		),
		$client->chatForbidden(
			id : 1445478820714804258,
			title : '8cb3eKWOtI1xUSjB',
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
			id : -80638158646039862,
			access_hash : 7304412711784857221,
			title : 'i9cSwsY370LzMPvg',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 67,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'a5lKwcRQzUIMjCWL',
					reason : 'uaj5nrRJzU0pTMB8',
					text : 'XlqiucF4erWt7RSG',
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
				until_date : 55,
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
				until_date : 100,
			),
			participants_count : 79,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 37,
			),
			color : $client->peerColor(
				color : 87,
				background_emoji_id : 4240866676894354285,
			),
			profile_color : $client->peerColor(
				color : 74,
				background_emoji_id : -4875720937569191377,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 19,
			subscription_until_date : 36,
			bot_verification_icon : 7410442169578484762,
			send_paid_messages_stars : -2639378976714745017,
			linked_monoforum_id : -517066409199811101,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : 5450453827699412574,
			access_hash : -6383897010677674891,
			title : 'jvZmn8VplthdwuXO',
			until_date : 56,
		),
	),
	users : array(
		$client->userEmpty(
			id : -3387460358254413909,
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
			id : -3005316791716979414,
			access_hash : -4823685200949625803,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 56,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'L6Ebl1WTISFNeHt2',
					reason : 'b0vJnTjpPaVGQtfo',
					text : 'gADXaPWVlNc8tk6h',
				),
			),
			bot_inline_placeholder : '7eR0hJM3UQuVj2ml',
			lang_code : 'PvuCIjU2O4Xbxktf',
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
				max_id : 16,
			),
			color : $client->peerColor(
				color : 14,
				background_emoji_id : -3528181957063508744,
			),
			profile_color : $client->peerColor(
				color : 76,
				background_emoji_id : 5792943899238480920,
			),
			bot_active_users : 38,
			bot_verification_icon : 2646509278879336433,
			send_paid_messages_stars : -22683599475731259,
		),
	),
);
```