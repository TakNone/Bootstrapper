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
		id : -228330192279271698,
		url : 'https://docs.liveproto.dev',
	),
	chats : array(
		$client->chatEmpty(
			id : -4822163486993339442,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 7869700105362762792,
			title : 'QHl1zbPxMufvmwsS',
			photo : $client->chatPhotoEmpty(),
			participants_count : 92,
			date : 2,
			version : 58,
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
				until_date : 44,
			),
		),
		$client->chatForbidden(
			id : 8736361824621768240,
			title : '52PZkzcMWBtHa9Js',
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
			id : 1429061185916665744,
			access_hash : -1555014158043542245,
			title : 'O1HEFPJQXGw0Zbjv',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 63,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'N2OypKdUkYbfxJT9',
					reason : 'NIxJlHR82Z13sr69',
					text : '6A1JxdvX0nwNu8iP',
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
				until_date : 61,
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
			participants_count : 57,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 92,
			),
			color : $client->peerColor(
				color : 31,
				background_emoji_id : -6369242450386888582,
			),
			profile_color : $client->peerColor(
				color : 71,
				background_emoji_id : -2822494529368705684,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 92,
			subscription_until_date : 61,
			bot_verification_icon : -1855624747665802526,
			send_paid_messages_stars : -1773374723799595408,
			linked_monoforum_id : 875979583991544105,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 515624451136102326,
			access_hash : -7930887054150225584,
			title : 'NupvniILXEDBrojc',
			until_date : 13,
		),
	),
	users : array(
		$client->userEmpty(
			id : 858744889524958448,
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
			id : -6363008896436087813,
			access_hash : -3384645686315033989,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 45,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '8tgvwfSPlAOFpBoQ',
					reason : '7h1woJ4yngeYNcUr',
					text : 'kDXmlr4I5oAMtZci',
				),
			),
			bot_inline_placeholder : 'xk95bOIVErl4K6iR',
			lang_code : 'MLckgHIF5KqxCJVo',
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
				max_id : 42,
			),
			color : $client->peerColor(
				color : 49,
				background_emoji_id : 7219866165957360183,
			),
			profile_color : $client->peerColor(
				color : 22,
				background_emoji_id : -6301329524747025096,
			),
			bot_active_users : 4,
			bot_verification_icon : 4553869231148302209,
			send_paid_messages_stars : -7950714499739404318,
		),
	),
);
```