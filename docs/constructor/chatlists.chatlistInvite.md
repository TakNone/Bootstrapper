# chatlists.chatlistInvite

**Description** : *Info about a chat folder deep link &raquo;*

**Layer** : 214

```tl
chatlists.chatlistInvite#f10ece2f flags:# title_noanimate:flags.1?true title:TextWithEntities emoticon:flags.0?string peers:Vector<Peer> chats:Vector<Chat> users:Vector<User> = chatlists.ChatlistInvite;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **title_noanimate** | [`flags.1?true`](type/true) | NOTHING |
| <mark>title</mark> | [`TextWithEntities`](type/TextWithEntities) | Name of the link |
| **emoticon** | [`flags.0?string`](type/string) | Emoji to use as icon for the folder |
| <mark>peers</mark> | [`Vector<Peer>`](type/Peer) | Supergroups and channels to join |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Related chat information |
| <mark>users</mark> | [`Vector<User>`](type/User) | Related user information |

---

## Type

[chatlists.ChatlistInvite](type/chatlists.ChatlistInvite)

---

## Example

```php
$chatlistsChatlistInvite = $client->chatlists->chatlistInvite(
	title_noanimate : true,
	title : $client->textWithEntities(
		text : 'pOt0nczN9yL7PJrU',
		entities : array(
			$client->messageEntityUnknown(
				offset : 98,
				length : 28,
			),
			$client->messageEntityMention(
				offset : 91,
				length : 74,
			),
			$client->messageEntityHashtag(
				offset : 16,
				length : 99,
			),
			$client->messageEntityBotCommand(
				offset : 32,
				length : 19,
			),
			$client->messageEntityUrl(
				offset : 88,
				length : 33,
			),
			$client->messageEntityEmail(
				offset : 57,
				length : 58,
			),
			$client->messageEntityBold(
				offset : 97,
				length : 16,
			),
			$client->messageEntityItalic(
				offset : 85,
				length : 63,
			),
			$client->messageEntityCode(
				offset : 67,
				length : 43,
			),
			$client->messageEntityPre(
				offset : 100,
				length : 80,
				language : '8GxQE3IPtlCD6igo',
			),
			$client->messageEntityTextUrl(
				offset : 51,
				length : 28,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 8,
				length : 94,
				user_id : 7446521209490040232,
			),
			$client->inputMessageEntityMentionName(
				offset : 88,
				length : 51,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 60,
				length : 97,
			),
			$client->messageEntityCashtag(
				offset : 47,
				length : 69,
			),
			$client->messageEntityUnderline(
				offset : 77,
				length : 53,
			),
			$client->messageEntityStrike(
				offset : 2,
				length : 3,
			),
			$client->messageEntityBankCard(
				offset : 53,
				length : 43,
			),
			$client->messageEntitySpoiler(
				offset : 9,
				length : 17,
			),
			$client->messageEntityCustomEmoji(
				offset : 16,
				length : 97,
				document_id : -5117402054295712236,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 36,
				length : 56,
			),
		),
	),
	emoticon : 'GpyfPvEc0KZHQtF8',
	peers : array(
		$client->peerUser(
			user_id : -3771581266574296179,
		),
		$client->peerChat(
			chat_id : -6043621304416346429,
		),
		$client->peerChannel(
			channel_id : 148660025586825056,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -6532961444327103480,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -5686601356259118687,
			title : 'CGJkIz7F0eZ3YU8E',
			photo : $client->chatPhotoEmpty(),
			participants_count : 40,
			date : 48,
			version : 86,
			migrated_to : $client->inputChannelEmpty(),
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
				until_date : 91,
			),
		),
		$client->chatForbidden(
			id : 3019964500564132028,
			title : '8mAiCMlx4oKefGuF',
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
			id : 271351730143787548,
			access_hash : -4561945420561747558,
			title : 'MTn3Sbc16VEeLqs0',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 62,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '98RTIkJCSFKHe2B7',
					reason : 'YEjSciwv5RpoaheZ',
					text : 'LyYrTpM2xQXz8s7d',
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
				until_date : 28,
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
				until_date : 63,
			),
			participants_count : 77,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 97,
			color : $client->peerColor(
				color : 40,
				background_emoji_id : 8758778129708071790,
			),
			profile_color : $client->peerColor(
				color : 79,
				background_emoji_id : 5302767773919735498,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 14,
			subscription_until_date : 65,
			bot_verification_icon : 7400403371799832678,
			send_paid_messages_stars : -4362211223306909227,
			linked_monoforum_id : -204402443629412989,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -928765470684296541,
			access_hash : 1177821140416754760,
			title : '18DupeKdvIjyrH9J',
			until_date : 83,
		),
	),
	users : array(
		$client->userEmpty(
			id : -2143416273664239332,
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
			id : -3090439642502459847,
			access_hash : 6451668924886166133,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 42,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'uEb1zsA0LMk7Tpx3',
					reason : 'Ve5H8MN6ay2YZ7WD',
					text : 'stnN1akYKu3pFjyT',
				),
			),
			bot_inline_placeholder : '1ZTQYLfPt0OuRXIU',
			lang_code : 'tALNDnG0aB6PFuox',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 77,
			color : $client->peerColor(
				color : 71,
				background_emoji_id : 1863949752756210686,
			),
			profile_color : $client->peerColor(
				color : 96,
				background_emoji_id : 3756847588793050289,
			),
			bot_active_users : 26,
			bot_verification_icon : 2601319151623359452,
			send_paid_messages_stars : -6360523476094002324,
		),
	),
);
```