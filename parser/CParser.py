def parser_team_from_str( team_name_str, teams_list ):
    for key_team, value_team in teams_list.items():
        access = 0
        for part_of_name_team in value_team:
            key = 0
            for part_of_name_team_site in team_name_str.split(" "):
                if (part_of_name_team_site.lower().find(part_of_name_team.lower()) == 0):
                    access += 1

            key += 1

            if (access == len(value_team)):
                return key_team
    return 0
