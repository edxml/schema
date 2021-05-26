from edxml_schema import SCHEMA_PATH_3_0


def test_import_schema_path():
    assert isinstance(SCHEMA_PATH_3_0, str)
