# account.resolvedBusinessChatLinks

**Description** : *Contains info about a single resolved business chat deep link &raquo;*

**Layer** : 214

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
		user_id : 7812015384412213176,
	),
	message : 'OJNxg6tLBdCp37bM',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 4,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 64,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 91,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 42,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 51,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 53,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 72,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 31,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 8,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 35,
			language : 'aZsVA1bcq0ufh5R3',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 52,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 71,
			user_id : 6636281931600065396,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 22,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 18,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 59,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 12,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 43,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 61,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 11,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 59,
			document_id : 2737374068357772050,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 77,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 7127921901199276600,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 583175909290858688,
			title : 'qlLf0QPJ84pAK3gE',
			photo : $client->chatPhotoEmpty(),
			participants_count : 57,
			date : 75,
			version : 42,
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
				until_date : 36,
			),
		),
		$client->chatForbidden(
			id : 6203189922908631352,
			title : 'r1PKS4vbiMeQcUNu',
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
			id : -6091696461131143660,
			access_hash : -9053094598312202096,
			title : 'khg8mOlFpnSRoxHQ',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 34,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'emgBct9dQUwGL6C8',
					reason : 'tY69DCxpPklH1Zga',
					text : 'sdPSKX7GLJBekR2u',
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
				until_date : 37,
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
				until_date : 35,
			),
			participants_count : 89,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 22,
			color : $client->peerColor(
				color : 26,
				background_emoji_id : -7700480783374355017,
			),
			profile_color : $client->peerColor(
				color : 63,
				background_emoji_id : 4449108609873200811,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 78,
			subscription_until_date : 37,
			bot_verification_icon : 6552985849167881091,
			send_paid_messages_stars : -5586876431781042786,
			linked_monoforum_id : -2285361663845572942,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -3109360425920695123,
			access_hash : -56944855232097065,
			title : 'CUcVe75uxjFqatsv',
			until_date : 52,
		),
	),
	users : array(
		$client->userEmpty(
			id : -1663723402436816840,
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
			id : -8421115864164277281,
			access_hash : 4740076747590959254,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 82,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'er4EfDn0VkbXi8U7',
					reason : 'F3S1iwgy4bxlVK0Q',
					text : 'Uv5QWw0VhLgfEu4z',
				),
			),
			bot_inline_placeholder : '9BWnzwluVdTOr1D0',
			lang_code : 'kSptQ1Nd4A7CRHP8',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 6,
			color : $client->peerColor(
				color : 41,
				background_emoji_id : 1241020278611672196,
			),
			profile_color : $client->peerColor(
				color : 87,
				background_emoji_id : -1208860428421449477,
			),
			bot_active_users : 24,
			bot_verification_icon : -7177826452605387277,
			send_paid_messages_stars : 7156232022621561525,
		),
	),
);
```