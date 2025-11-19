# account.resolvedBusinessChatLinks

**Description** : *Contains info about a single resolved business chat deep link &raquo;*

**Layer** : 218

```tl
account.resolvedBusinessChatLinks#9a23af21 flags:# peer:Peer message:string entities:flags.0?Vector<MessageEntity> chats:Vector<Chat> users:Vector<User> = account.ResolvedBusinessChatLinks;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>peer</mark> | [`Peer`](type/Peer) | Destination peer |
| <mark>message</mark> | [`string`](type/string) | Message to pre-fill in the message input field |
| **entities** | [`flags.0?Vector<MessageEntity>`](type/MessageEntity) | Message entities for styled text |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Mentioned chats |
| <mark>users</mark> | [`Vector<User>`](type/User) | Mentioned users |

---

## Type

[account.ResolvedBusinessChatLinks](type/account.ResolvedBusinessChatLinks)

---

## Example

```php
$accountResolvedBusinessChatLinks = $client->account->resolvedBusinessChatLinks(
	peer : $client->peerUser(
		user_id : -7216989761252097179,
	),
	message : 'QHgYAV4xr98LhSWT',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 23,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 62,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 48,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 67,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 43,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 57,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 34,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 95,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 97,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 59,
			language : 'vqmFYHtbcQkA5O1d',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 5,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 13,
			user_id : -1385736584417689100,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 89,
			user_id : $client->get_input_user(peer : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 28,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 87,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 30,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 88,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 33,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 92,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 4,
			document_id : 7049782523140886953,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 8,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -5927458507807202370,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -412240746271182337,
			title : 'OTNQ1XokxYyWuEgn',
			photo : $client->chatPhotoEmpty(),
			participants_count : 75,
			date : 69,
			version : 43,
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
				until_date : 62,
			),
		),
		$client->chatForbidden(
			id : 7546269063533057901,
			title : 'asVY7J8Ko2mWLEcM',
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
			id : -972135987660275528,
			access_hash : -502433296647798597,
			title : '3rIRSkYdUgylEwCG',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 84,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'VWBIeiZmSyRovExb',
					reason : 'VR691FCPy8ZMSl7O',
					text : 'ZiOAkMCw892fncde',
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
				until_date : 79,
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
				until_date : 4,
			),
			participants_count : 78,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 96,
			),
			color : $client->peerColor(
				color : 99,
				background_emoji_id : -4260491334797336335,
			),
			profile_color : $client->peerColor(
				color : 11,
				background_emoji_id : -6825182582776962416,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 49,
			subscription_until_date : 3,
			bot_verification_icon : 1690172821294613388,
			send_paid_messages_stars : 5000830375046864735,
			linked_monoforum_id : 1538917058584009830,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 427561209679957397,
			access_hash : 3944871736301710748,
			title : 'ShMDKqNfkRAPlUrQ',
			until_date : 67,
		),
	),
	users : array(
		$client->userEmpty(
			id : 8166796603256214373,
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
			id : 5807516903592482612,
			access_hash : 2666714642898529268,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 69,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'IJp0d4SrehZbsV86',
					reason : 'v5siYWqVIx3SZTem',
					text : '1IYbZXlmn5EG8Ukr',
				),
			),
			bot_inline_placeholder : 'CWDspNEVoiynzvjf',
			lang_code : 'GWyiE1Z8how3td9F',
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
				max_id : 34,
			),
			color : $client->peerColor(
				color : 5,
				background_emoji_id : -8851046894022226064,
			),
			profile_color : $client->peerColor(
				color : 65,
				background_emoji_id : 838650043986527173,
			),
			bot_active_users : 32,
			bot_verification_icon : 318337509397228989,
			send_paid_messages_stars : -4747862560342945864,
		),
	),
);
```