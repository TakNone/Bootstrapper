# messages.webPage

**Description** : *Represents an Instant View webpage*

**Layer** : 218

```tl
messages.webPage#fd5e12bd webpage:WebPage chats:Vector<Chat> users:Vector<User> = messages.WebPage;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>webpage</mark> | [`WebPage`](type/WebPage) | The instant view webpage |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Chats mentioned in the webpage |
| <mark>users</mark> | [`Vector<User>`](type/User) | Users mentioned in the webpage |

---

## Type

[messages.WebPage](type/messages.WebPage)

---

## Example

```php
$messagesWebPage = $client->messages->webPage(
	webpage : $client->webPageEmpty(
		id : -3338086640352185839,
		url : 'https://docs.liveproto.dev',
	),
	chats : array(
		$client->chatEmpty(
			id : 8047989528017448548,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -6515862420310684212,
			title : 'fLcTevO60HPzVNSJ',
			photo : $client->chatPhotoEmpty(),
			participants_count : 90,
			date : 73,
			version : 0,
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
				until_date : 66,
			),
		),
		$client->chatForbidden(
			id : 381977113437676643,
			title : 'msqB3EXLN0duZtbS',
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
			id : -4936418275089992185,
			access_hash : 663809802219989235,
			title : 'jEQ9C14GpWkbgHyM',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 38,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'RPuE8IkzMUrQyZsK',
					reason : 's4eXt69OMQNcgikL',
					text : 'rSXyjD7KsV1INTQ4',
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
				until_date : 7,
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
			participants_count : 36,
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
				color : 27,
				background_emoji_id : 2070421712248814170,
			),
			profile_color : $client->peerColor(
				color : 63,
				background_emoji_id : -3572912868221799258,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 40,
			subscription_until_date : 96,
			bot_verification_icon : -7079213737042208193,
			send_paid_messages_stars : -3573581375896748158,
			linked_monoforum_id : 6574984189710636515,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -4884817679159000184,
			access_hash : 5395566295396070599,
			title : 'acQ09WEMFUoBxA41',
			until_date : 16,
		),
	),
	users : array(
		$client->userEmpty(
			id : 9157876526135098432,
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
			id : 5842360471400916405,
			access_hash : -6123464809520666242,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 62,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '685tlpJBKCD7fI1R',
					reason : 'ahbRZ95OFqSwpxnJ',
					text : 'PVcmdFjuXGoywU7k',
				),
			),
			bot_inline_placeholder : 'TtV40PSix1MCQHfA',
			lang_code : 'FA1iM6Kpg5LVY70m',
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
				max_id : 23,
			),
			color : $client->peerColor(
				color : 53,
				background_emoji_id : -2025952155500147022,
			),
			profile_color : $client->peerColor(
				color : 87,
				background_emoji_id : -7177871568423938412,
			),
			bot_active_users : 96,
			bot_verification_icon : 4073514210022677570,
			send_paid_messages_stars : -4726783283382346498,
		),
	),
);
```